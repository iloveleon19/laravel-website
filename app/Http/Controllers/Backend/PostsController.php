<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image AS DBImage;
use App\Card AS DBCard;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbCard = DBCard::get();
        return json_encode($dbCard);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->imageFile)
       {
          $image = $request->imageFile;
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($image)->save(public_path('images/').$name);
        }

        $imgTypeAry = ['slide'=>1,'card'=>2,'bg'=>3];

        $dbImage = new DBImage();
        $dbImage->img_path="/images/{$name}";
        $dbImage->type = $imgTypeAry['card'];
        $dbImage->alt_text = '{"alt":"card image", "alt_cap":"Card image cap"}';
        $dbImage->is_active = $request->activeSelect;
        $dbImage->save();

        $dbCard = new DBCard();
        $dbCard->is_active = $request->activeSelect;
        $dbCard->header = $request->cardHeader;
        $dbCard->title = $request->cardTitle;
        $dbCard->text = $request->cardText;
        $dbCard->img_id = $dbImage->id;
        $dbCard->save();

        return response('Successed', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DBCard::where('id', $id)->delete();

        if ($result) {
            return response('success', 200);
        } else {
            return response('query failed', 204);
        }
    }
}
