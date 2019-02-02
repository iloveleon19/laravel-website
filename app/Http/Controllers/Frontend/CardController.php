<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Card;

class CardController extends Controller
{
    public function getCardData()
    {
        $cards = Card::join('images', ['images.id'=>'cards.img_id'])
                        ->where(['cards.is_active'=>true,'images.is_active'=>true])
                        ->orderBy('cards.created_at', 'desc')
                        ->skip(0)->take(2)->get();

        $outData = [];
        foreach ($cards as $card) {
            $alt = json_decode($card->alt_text, true);

            $outData[] = [
                'card_id' => "$card->id",
                'header' => "$card->header",
                'title' => "$card->title",
                'text' => "$card->text",
                'img_id' => "$card->img_id",
                'img_path' => "$card->img_path",
                'alt_cap' => "{$alt['alt_cap']}"
            ];
        }

        return json_encode($outData);
    }
}
