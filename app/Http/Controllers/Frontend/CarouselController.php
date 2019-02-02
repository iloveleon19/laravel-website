<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carousel;

class CarouselController extends Controller
{
    public function getCarouselData()
    {
        $carousels = Carousel::join('images', ['images.id'=>'carousels.img_id'])
                            ->where(['carousels.is_active'=>true,'images.is_active'=>true])
                            ->orderBy('carousels.created_at', 'desc')
                            ->skip(0)->take(5)->get();

        $outData = [];
        foreach ($carousels as $carousel) {
            $alt = json_decode($carousel->alt_text, true);

            $outData[] = [
                'carousel_id' => "$carousel->id",
                'title' => "$carousel->title",
                'text' => "$carousel->text",
                'img_id' => "$carousel->img_id",
                'img_path' => "$carousel->img_path",
                'alt' => "{$alt['alt']}"
            ];
        }

        return json_encode($outData);
    }
}
