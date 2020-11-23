<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;

class MailController extends Controller
{

    //メール送信機能
    public function sendMail()
    {
        $data=[];
        Mail::send(['text' => 'mail.temp'], $data, function($message){ $message->to("collegeliving01@gmail.com")->subject("テスト送信"); });
        
        return view('mail.complete');
    }
}
