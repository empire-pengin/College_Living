@extends('layouts.app')
@section('title', 'お問い合わせフォーム')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <div class="p-0">
    <div class="col-12 py-3 bg-light">
      <div class="my-3 text-center text-dark">
        <h1 class="border-bottom border-danger d-inline">CONTACT</h1>
        <h4>お問い合わせ</h4>
      </div>
    </div>
    <div class="row d-flex justify-content-center p-0 m-0">
      <div class="col-sm-10 text-center col-md-8  mt-3">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ asset('')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">お問い合わせ</a>
          </li>
        </ul>
        <div class="text-center pb-5 pt-3">
          <h1 style="color:#FF4500;">MAIL FORM</h1>
          <p>内容を確認次第、担当者よりご連絡をさせていただきます。</p>
        </div>
      </div>
    </div>


    <div class="row p-0 m-0 d-flex justify-content-center">
      <div class="col-sm-10  col-md-8">
        <form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">{{-- CSRF対策--}}
          <!--↓↓件名↓↓-->
          <div class="form-group border-top border-danger">
            <label for="name" class="control-label col-sm-2 mt-1">件名</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="件名を入力してください" autofocus>
          </div>
          <!--↓↓メールアドレス↓↓-->
          <div class="form-group border-top border-danger">
            <label for="email" class="control-label col-sm-8 mt-1">メールアドレス</label>
            <div class="">
              <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
            </div>
          </div>
          <!--↓↓本文↓↓-->
          <div class="form-group pb-2 border-top border-danger border-bottom">
            <label for="tel" class="control-label col-sm-2 mt-1">本文</label>
            <div class="">
              <textarea class="form-control" name="body" id="body" rows="3" placeholder="お問い合わせ内容を入力してください" autofocus></textarea>
            </div>
          </div>
          <div class=" mb-5 mt-4">
            <button class="btn btn-outline-danger btn-lg btn-block" type="submit">送信する</button>
          </div>
        </form>
      </div>
    </div>
    <div class=" p-0" style="">
      <!-- フッターPC画面 -->
      <div class="container-fluid border-top border-danger d-none d-md-block" style="background-color:#F8F8FF;">
        <div class="row d-flex bd-highlight border-bottom border-danger text-center">
          <!-- Twitter -->
          <div class="col-6 flex-fill bd-highlight
          my-2 border-right align-self-center border-danger">
          <p><i class="fab fa-twitter text-danger fa-3x"></i></i></p>
          <h3>最新情報をお届け</h3>
          <small>Twitterで最新情報を投稿してます。</small>
          <p><a href="#" class="btn btn-outline-danger btn-lg mt-3"
            role="button" aria-pressed="true">
            Twitterを見る
          </a></p>
        </div>
        <!-- HOME -->
        <div class="col-6 flex-fill bd-highlight align-self-center my-2" >
          <h3>サイトトップへ</h3>

          <p><a href="{{ asset('')}}" class="btn btn-outline-danger btn-lg mt-3" role="button" aria-pressed="true">
            ホーム
          </a></p>
        </div>
      </div>
      <!-- SNS -->
      <div class="row " >
        <div class="col-12 text-center mt-2">
          <h1>SNS</h1>
          <samll>Twitter意外でも情報を発信しています。</samll>
          <div class="my-3 ">
            <span><a href=""><i class="fab fa-facebook-f fa-3x text-danger"></i></a></span>
            <span><a href=""><i class="fab fa-instagram fa-3x text-danger mx-3"></i></a></span>
            <span><a href=""><i class="fab fa-line fa-3x text-danger"></i></a></span>
          </div>
        </div>
        <!-- コピーライト -->
        <div class="col-12 p-0">
          <nav class="nav navbar navbar-dark bg-dark  p-0">
            <a class="nav-item nav-link text-light" href="#">個人情報の取り扱い</a>
            <a class="nav-item nav-link text-light" href="#"><strong>College Living</strong></a>
            <a class="nav-item nav-link text-light" href="#">Copyright@ ALL rights</a>
          </nav>
        </div>
      </div>
    </div>

    <!-- フッターレスポンシブ -->
    <!-- レスポンシブ -->
    <div class="container-fluid border-top border-danger  text-center py-0  d-sm-block d-md-none">
      <div class="p-3 ">
        <!-- <div class="mb-3">
          <h6 class="text-danger mb-1 mt-3">Contact</h6>
          <h2 class=" d-inline border-danger border-bottom" style="font-weight:bold;">お問い合わせ</h2>
        </div> -->
        <div class="row mb-4">

          <div class="col-sm-6 mt-3">
            <a href="{{ asset('')}}" style="text-decoration:none;">
              <div class="border border-danger  py-2
              bg-white text-center mr-3" style="font-size: 18px;">
              <small class="text-dark "><i class="fas fa-home text-danger fa-2x"></i>　サイトトップ</small>
            </a>
          </div>
        </div>
        <div class="col-sm-6 mt-3">
          <a href="https://twitter.com/barchi118" style="text-decoration:none;">
            <div class="border border-danger  py-2
            bg-white text-center mr-3" style="font-size: 18px;">
            <small class="text-dark "><i class="fab fa-twitter text-danger fa-2x"></i>　Twitter</small>
          </a>
        </div>
      </div>


    </div>

  </div>
  <div class="row bg-dark">
    <nav class="nav navbar navbar-dark bg-dark  p-0">
      <a class="nav-item nav-link text-light" href="#">個人情報の取り扱い</a>
      <a class="nav-item nav-link text-light" href="#">Copyright@ ALL rights</a>
    </nav>
  </div>
</div>
</div>
</div>

@endsection
