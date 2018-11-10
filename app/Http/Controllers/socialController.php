<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class socialController extends Controller
{
    public function getSocialData()
    {
        $outData[]=['Social_id'=>'1', 'title'=>'Twitter', 'iclass'=>'fab fa-twitter-square'];
        $outData[]=['Social_id'=>'2', 'title'=>'Facebook', 'iclass'=>'fab fa-facebook-square'];
        $outData[]=['Social_id'=>'3', 'title'=>'Instagram', 'iclass'=>'fab fa-instagram'];
        $outData[]=['Social_id'=>'4', 'title'=>'Email', 'iclass'=>'fas fa-envelope-square'];

        return json_encode($outData);
    }
}
