<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function getCardData()
    {
        $outData[]=['card_id'=>'2','img_id'=>'2','header'=>'maecenas sapien feugiat ex purus','title'=>'Lorem ipsum dolor','text'=>'Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.'];
        $outData[]=['card_id'=>'3','img_id'=>'3','header'=>'mattis elementum sapien pretium tellus','title'=>'Vestibulum sit amet','text'=>'Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.'];

        return json_encode($outData);
    }
}
