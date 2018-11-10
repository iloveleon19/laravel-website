<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class footController extends Controller
{
    public function getFootData()
    {
        $outData[] = ['company_id'=>'1','name'=>'Untitled. All rights reserved.'];

        return json_encode($outData);
    }
}
