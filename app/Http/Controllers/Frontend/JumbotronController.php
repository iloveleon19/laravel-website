<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jumbotron;

class JumbotronController extends Controller
{
    public function getjumbotronData()
    {
        $jumbotron = Jumbotron::where(['is_active'=>true])->orderBy('created_at', 'desc')->first();

        $outData = [];
        $outData[] = [
            'jumbotron_id'=>"$jumbotron->id",
            'title'=>"$jumbotron->title",
            'text'=>"$jumbotron->text"
        ];

        return json_encode($outData);
    }
}
