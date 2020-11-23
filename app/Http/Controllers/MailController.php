<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;

class MailController extends Controller
{
    public function index(){
        return view('mail.index');
    }

    //メール送信機能
    public function sendMail(Request $request){
        $data = $request->all();  # 1)
        Mail::send(['text' => 'mail.temp'], $data, function($message) use($data){ # 2)
        $message->to($data["email"])->subject($data["title"]);
        });
        return view('mail.complete');
    }
}

// public function sendMail()
//     {
//         $data=[];
//         Mail::send(['text' => 'mail.temp'], $data, function($message){ $message->to("collegeliving01@gmail.com")->subject("テスト送信"); });
        
//         return view('mail.complete');
