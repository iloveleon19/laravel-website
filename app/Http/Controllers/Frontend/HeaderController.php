<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Search;
use App\Menu;
use App\SubMenu;

class HeaderController extends Controller
{
    public function getBrandData()
    {
        $brand = Brand::orderby('created_at', 'desc')->first();

        $outData = [];
        $outData[] = [
            'brand_id'=>"$brand->id",
            'title'=>"$brand->title",
            'link_url'=>"$brand->link_url"
        ];

        return json_encode($outData);
    }

    public function getMenuItem()
    {
        $menus = Menu::where('is_active',true)->orderBy('sort','asc')->get();

        $subMenus = SubMenu::where('is_active',true)
                            ->orderBy('menu_id','asc')
                            ->orderBy('divider','asc')
                            ->orderBy('sort','asc')
                            ->get();

        $outData = [];
        foreach ($menus as $key => $menu) {
            $outData[$key] = [
                'menu_id' => "$menu->id",
                'title' => "$menu->title",
                'link_url' => "$menu->link_url",
                'dropdownItems' => [],
                'isDropdown' => "$menu->isDropdown",
                'isActive' => "$menu->isActive",
                'isDisabled' => "$menu->isDisabled",
                'sort' => "$menu->sort",
            ];

            if ($menu->isDropdown==true) {
                foreach ($subMenus as $k => $subMenu) {
                    if ($subMenu->menu_id==$menu->id) {
                        $outData[$key]['dropdownItems'][] = $subMenu;
                    }
                }
            }
        }

        return json_encode($outData);
    }

    public function getSearchItems()
    {
        $search = Search::orderby('created_at', 'desc')->first();

        $outData = [];
        $outData[] = [
            'search_id'=>"$search->id",
            'title'=>"$search->title",
            'placeholder'=>"$search->placeholder"
        ];

        return json_encode($outData);
    }
}
