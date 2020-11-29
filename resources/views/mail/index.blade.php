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
  <div class="col-12 py-3 bg-danger">
  <div class="my-3 text-center text-light">
        <h1 >CONTACT</h1>
        <h4>お問い合わせ</h4>
  </div>
  </div>
  <div class="col-8 offset-2 mt-3">
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

  <!--↓↓名前↓↓-->
  <div class="col-8 offset-2">
  <form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">{{-- CSRF対策--}}
  <!--↓↓件名↓↓-->
  <div class="form-group border-top border-danger">
    <label for="name" class="control-label col-sm-2 mt-1">件名</label>

      <input type="text" name="title" id="title" class="form-control" placeholder="件名を入力してください" autofocus>

  </div>
  <!--↑↑件名↑↑-->
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
  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>

@endsection

