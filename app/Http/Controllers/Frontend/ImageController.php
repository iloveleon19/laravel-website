<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
USE App\Image;

class ImageController extends Controller
{
    public function getSlideImage()
    {
        $images = Image::where(['type'=>1, 'is_active'=>true])->orderBy('created_at', 'desc')->skip(0)->take(5)->get();

        $outData = [];
        foreach ($images as $image) {
            $alt = json_decode($image->alt_text, true);

            $outData[] = [
                'img_id' => "$image->id",
                'img_path' => "$image->img_path",
                'alt' => "{$alt['alt']}"
            ];
        }

        return json_encode($outData);
    }

    public function getPicImage()
    {
        $images = Image::where(['type'=>2, 'is_active'=>true])->orderBy('created_at', 'desc')->skip(0)->take(4)->get();

        $outData = [];
        foreach ($images as $image) {
            $alt = json_decode($image->alt_text, true);

            $outData[] = [
                'img_id' => "$image->id",
                'img_path' => "$image->img_path",
                'alt' => "{$alt['alt']}",
                'alt_cap' => "{$alt['alt_cap']}",
            ];
        }

        return json_encode($outData);
    }

    public function getBgImage()
    {
        $images = Image::where(['type'=>3, 'is_active'=>true])->orderBy('created_at', 'desc')->skip(0)->take(1)->get();

        $outData = [];
        foreach ($images as $image) {
            $alt = json_decode($image->alt_text, true);

            $outData[] = [
                'img_id' => "$image->id",
                'img_path' => "$image->img_path",
                'alt' => "{$alt['alt']}"
            ];
        }

        return json_encode($outData);
    }
}
