<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Footer;
use App\Brand;

class FooterController extends Controller
{
    public function getFooterData()
    {
        $brand = Brand::orderby('created_at', 'desc')->first();
        $footer = Footer::orderby('created_at', 'desc')->first();

        $outData = [];
        $outData[] = [
            'footer_id'=>"$footer->id",
            'title' => "$brand->title",
            'link_url' => "$brand->link_url",
            'content'=>"$footer->content"
        ];

        return json_encode($outData);
    }
}
