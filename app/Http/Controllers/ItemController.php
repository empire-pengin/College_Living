<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('items.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $item = Item::find($id);
        // var_dump($item);
        return view('items.show',[
            'item' => $item
        ]);
        // return view('items.show', compact('item'));
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
        //
    }

    //検索機能
    public function serch(Request $request) {
        

        $keyword_station = $request->station;

        if(!empty($keyword_station)) {
        $query = Item::query();
        // クエリストリングだけ取得したいならquery()
        //WebブラウザなどがWebサーバに送信するデータをURLの末尾に特定の形式で表記したもの
        $items = $query->where('station','like', '%' .$keyword_station. '%')->get();
        // LaravelのEloquentでSQL文のLIKE演算子を使いたい場合は、whereの第2引数をLIKEにすればよい。
        //like演算子は一部があっているものを検索する。
        $message = "「". $keyword_station."」を含む物件の検索が完了しました。";
        return view('items.serch')->with([
        'items' => $items,
        'message' => $message,
        ]);
    }

    else {
        $message = "検索結果はありません。";
        return view('items.serch')->with('message',$message);
        }
    }
}
