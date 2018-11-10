<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function getSlideImage()
    {
        $outData[]=['img_id'=>'1','img_path'=>'/images/slide01.jpg', 'alt'=>'First slide'];
        $outData[]=['img_id'=>'2','img_path'=>'/images/slide02.jpg', 'alt'=>'Second slide'];
        $outData[]=['img_id'=>'3','img_path'=>'/images/slide03.jpg', 'alt'=>'Third slide'];
        $outData[]=['img_id'=>'4','img_path'=>'/images/slide04.jpg', 'alt'=>'Fourth slide'];
        $outData[]=['img_id'=>'5','img_path'=>'/images/slide05.jpg', 'alt'=>'Fifth slide'];

        return json_encode($outData);
    }

    public function getPicImage()
    {
        $outData[]=['img_id'=>'1','img_path'=>'/images/pic01.jpg', 'alt'=>'Card image', 'alt_cap'=>'Card image cap'];
        $outData[]=['img_id'=>'2','img_path'=>'/images/pic02.jpg', 'alt'=>'Card image', 'alt_cap'=>'Card image cap'];
        $outData[]=['img_id'=>'3','img_path'=>'/images/pic03.jpg', 'alt'=>'Card image', 'alt_cap'=>'Card image cap'];
        $outData[]=['img_id'=>'4','img_path'=>'/images/pic04.jpg', 'alt'=>'Card image', 'alt_cap'=>'Card image cap'];

        return json_encode($outData);
    }

    public function getBgImage()
    {
        $outData[]=['img_id'=>'1','img_path'=>'/images/bg.jpg', 'alt'=>'Background image'];

        return json_encode($outData);
    }
}
