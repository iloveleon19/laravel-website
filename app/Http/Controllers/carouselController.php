<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carouselController extends Controller
{
    public function getCarouselData()
    {
        $outData[]=['carousel_id'=>'1','img_id'=>'1','title'=>'Hielo','text'=>'A free responsive web site template by <a href="https://templated.co">TEMPLATED</a>'];
        $outData[]=['carousel_id'=>'2','img_id'=>'2','title'=>'Magna etiam','text'=>'Lorem ipsum dolor sit amet nullam feugiat'];
        $outData[]=['carousel_id'=>'3','img_id'=>'3','title'=>'Tempus dolor','text'=>'Sed cursus aliuam veroeros lorem ipsum nullam'];
        $outData[]=['carousel_id'=>'4','img_id'=>'4','title'=>'Etiam feugiat','text'=>'Adipiscing lorem ipsum feugiat sed phasellus consequat'];
        $outData[]=['carousel_id'=>'5','img_id'=>'5','title'=>'Lorem adipiscing','text'=>'Ipsum dolor sed magna veroeros lorem ipsum'];

        return json_encode($outData);
    }
}
