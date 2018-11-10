<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return 'Hello';
    }

    public function showID($id)
    {
        return $id;
    }

    public function listPage()
    {
        // 使用 view
        return view('list');
    }

    public function listDataGet(Request $request)
    {
        $result = $request->all();
        // $name = $request->input('params.new_list');

        $rtn = ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];

        if ($request->has('new_list')) {
            $name = $request->input('new_list');
            $rtn[] = $name;
        }

        $name = $request->input('new_list', 'default_list');

        $rtn[] = $name;

        // 回傳資料陣列
        return $rtn;
    }

    public function listDataPost(Request $request)
    {
        $result = $request->all();
        // $name = $request->input('new_list');

        if ($request->has('params.new_list')) {
            $name = $request->input('params.new_list');
            $rtn[] = $name;
        }

        $rtn = ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];
        $rtn[] = $name;

        // 回傳資料陣列
        return $rtn;
    }

}
