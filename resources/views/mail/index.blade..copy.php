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
  <div class="col-12 py-5">
  <div class="my-5 text-center">
        <h1>CONTACT</h1>
        <h4>お問い合わせ</h4>
  </div>
  </div>
  <div class="col-12">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">お問い合わせ</a>
      </li>
    </ul>
    <div class="text-center py-5">
      <h1>MAIL FORM</h1>
      <h4>メールフォーム</h4>
      <p>内容を確認次第、担当者よりご連絡をさせていただきます。</p>
    </div>
  </div>
  <div class="col-12">
  <form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">{{-- CSRF対策--}}
  <!--↓↓名前↓↓-->
  <!--↓↓件名↓↓-->
  <div class="form-group">
    <label for="name" class="control-label col-sm-2">件名:</label>
    <div class="col-sm-10">
      <input type="text" name="title" id="title" class="form-control" placeholder="件名を入力してください" autofocus>
      <!--/.col-sm-10--></div>
      <!--/.form-group--></div>
      <!--↑↑件名↑↑-->
      <!--↓↓メールアドレス↓↓-->
      <div class="form-group">
        <label for="email" class="control-label col-sm-2">メールアドレス:</label>
        <div class="col-sm-10">
          <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
          <!--/.col-sm-10--></div>
          <!--/.form-group--></div>
          <!--↑↑メールアドレス↑↑-->
          <!--↓↓本文↓↓-->
          <div class="form-group">
            <label for="tel" class="control-label col-sm-2">本文:</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="body" id="body" rows="3" placeholder="お問い合わせ内容を入力してください" autofocus></textarea>
              <!--/.col-sm-10--></div>
              <!--/.form-group-->
          </div>
              <!--↑↑本文↑↑-->
              <button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
  </div>
  <!-- この間にコードを書く -->
  <!-- この間にコードを書く -->
  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
<form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">{{-- CSRF対策--}}
  <!--↓↓件名↓↓-->
  <div class="form-group">
    <label for="name" class="control-label col-sm-2">件名:</label>
    <div class="col-sm-10">
      <input type="text" name="title" id="title" class="form-control" placeholder="件名を入力してください" autofocus>
      <!--/.col-sm-10--></div>
      <!--/.form-group--></div>
      <!--↑↑件名↑↑-->
      <!--↓↓メールアドレス↓↓-->
      <div class="form-group">
        <label for="email" class="control-label col-sm-2">メールアドレス:</label>
        <div class="col-sm-10">
          <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
          <!--/.col-sm-10--></div>
          <!--/.form-group--></div>
          <!--↑↑メールアドレス↑↑-->
          <!--↓↓本文↓↓-->
          <div class="form-group">
            <label for="tel" class="control-label col-sm-2">本文:</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="body" id="body" rows="3" placeholder="お問い合わせ内容を入力してください" autofocus></textarea>
              <!--/.col-sm-10--></div>
              <!--/.form-group-->
          </div>
              <!--↑↑本文↑↑-->
              <button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
@endsection