<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FootController extends Controller
{
    public function getFootData()
    {
        $outData[] = ['company_id'=>'1','name'=>'Untitled. All rights reserved.'];

        return json_encode($outData);
    }
}
