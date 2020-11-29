<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Point;

class ExperienceController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Experience::simplePaginate(30);
        return view('experiences.index',[
            'experience' => $experience
        ]);
        
    }

    public function show($id)
    {
        $experience = Experience::find($id);
        $all = Experience::all();
        return view('experiences.show',[
            'experience' => $experience,
            'all' => $all
        ]);
    }

    public function create()
    {
        $user = auth()->user();
        $experience = Experience::all();

        return view('experiences.create', [
            'user' => $user,
            'experience' => $experience
        ]);
    }

     public function store(Request $request, Experience $experience,Point $point)
    {

        $user = auth()->user();
        $data = $request->all();

        // $validator->validate();
        $path = $request->file('image')->store('public/experience');
        // public/text_imagesに保存
        $image= basename($path); 
        // 画像名のみ保存するようにしています。
        $experience->experienceStore($user->id, $data,$image);
        $point->pointStore($user->id);
        return redirect('experiences');
    }


    //検索機能
    public function serch(Request $request) {
        $keyword_name = $request->college_name;
        if(!empty($keyword_name)) {
        $query = Experience::query();
        // クエリストリングだけ取得したいならquery()
        //WebブラウザなどがWebサーバに送信するデータをURLの末尾に特定の形式で表記したもの
        $experience = $query->where('college_name','like', '%' .$keyword_name. '%')->get();
        // LaravelのEloquentでSQL文のLIKE演算子を使いたい場合は、whereの第2引数をLIKEにすればよい。
        //like演算子は一部があっているものを検索する。
        $message = "「". $keyword_name."」を含む大学の検索が完了しました。";
        return view('experiences.serch')->with([
        'experience' => $experience,
        'message' => $message,
        ]);
    }

    else {
        $message = "検索結果はありません。";
        return view('experiences.serch')->with('message',$message);
        }
    }

}
