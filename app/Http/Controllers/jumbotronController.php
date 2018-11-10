<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jumbotronController extends Controller
{
    public function getjumbotronData()
    {
        $outData[] = ['jumbotron_id'=>'1','title'=>'Untitled. All rights reserved.', 'text'=>'Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna'];

        return json_encode($outData);
    }
}
