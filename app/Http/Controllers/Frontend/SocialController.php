<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Social;

class SocialController extends Controller
{
    public function getSocialData()
    {
        $socials = Social::where('is_active',true)->orderBy('sort','asc')->get();

        $outData = [];
        foreach ($socials as $social) {
            $outData[] = [
                'social_id' => "$social->id",
                'iclass' => "$social->iclass",
                'title' => "$social->title",
                'link_url' => "$social->link_url",
                'sort' => "$social->sort"
            ];
        }

        return json_encode($outData);
    }
}
