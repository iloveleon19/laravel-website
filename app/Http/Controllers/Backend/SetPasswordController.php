<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SetPasswordController extends Controller
{
    /**
     * @return Response
     */
    public function set_password(Request $request) {

        $id = Auth::user()->id;

        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;

        $res = DB::table('users')->where('id', $id)->select('password')->first();

        if (!Hash::check($oldPassword, $res->password)) {
            return response('failed', 204);
        }

        $update = array(
          'password' => bcrypt($newPassword),
        );
        $result = DB::table('users')->where('id', $id)->update($update);
        if ($result) {
            Auth::logout();
            return response('success', 200);
        } else {
            return response('query failed', 204);
        }
    }
}
