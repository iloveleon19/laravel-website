<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @return Response
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // 如果認證通過...
            return response('success', 200);
        }
        return response('failed', 204);
    }

    public function logout(Request $request) {
        Auth::logout();
        return response('success', 200);
    }
}
