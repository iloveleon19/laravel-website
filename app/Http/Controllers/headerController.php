<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headerController extends Controller
{
    public function getBrandData()
    {
        $outData[]=['brand_id'=>'1', 'title'=>'iloveleon', 'link'=>'#'];

        return json_encode($outData);
    }

    public function getMenuItem()
    {
        $subItem[] = ['id'=>'1','parent_id'=>'3','title'=>'Action','divider'=>'1'];
        $subItem[] = ['id'=>'2','parent_id'=>'3','title'=>'Another action','divider'=>'1'];
        $subItem[] = ['id'=>'3','parent_id'=>'3','title'=>'Something else here','divider'=>'2'];

        $outData[]=['item_id'=>'1', 'title'=>'Home', 'link'=>'#', 'dropdownItems'=>[], 'isDropdown'=>false, 'isActive'=>true, 'isDisable'=>false];
        $outData[]=['item_id'=>'2', 'title'=>'Link', 'link'=>'#', 'dropdownItems'=>[], 'isDropdown'=>false, 'isActive'=>false, 'isDisable'=>false];
        $outData[]=['item_id'=>'3', 'title'=>'Dropdown', 'link'=>'#', 'dropdownItems'=>[], 'isDropdown'=>true, 'isActive'=>false, 'isDisable'=>false];
        $outData[]=['item_id'=>'4', 'title'=>'Disable', 'link'=>'#', 'dropdownItems'=>[], 'isDropdown'=>false, 'isActive'=>false, 'isDisable'=>true];

        foreach ($outData as $key => $row) {
            if ($row['isDropdown']==true) {
                foreach ($subItem as $k => $r) {
                    if ($r['parent_id']==$row['item_id']) {
                        $outData[$key]['dropdownItems'][] = $r;
                    }
                }
            }
        }

        return json_encode($outData);
    }

    public function getSearchItems()
    {
        $outData[]=['id'=>'1', 'title'=>'search', 'placeholder'=>'search'];

        return json_encode($outData);
    }
}
