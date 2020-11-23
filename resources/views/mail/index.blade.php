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
  <div class="col-12 py-5 bg-secondary">
<<<<<<< HEAD
  <div class="my-5 text-center">
=======
  <div class="my-5 text-center text-light">
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
        <h1>CONTACT</h1>
        <h4>お問い合わせ</h4>
  </div>
  </div>
<<<<<<< HEAD
  <div class="col-12">
=======
  <div class="col-4 offset-4 mt-3">
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
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
<<<<<<< HEAD
    <div class="text-center py-5">
=======
    <div class="text-center pb-5 pt-3">
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
      <h1>MAIL FORM</h1>
      <h4>メールフォーム</h4>
      <p>内容を確認次第、担当者よりご連絡をさせていただきます。</p>
    </div>
  </div>
<<<<<<< HEAD
  <div class="col-12">
  <form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">{{-- CSRF対策--}}
  <!--↓↓名前↓↓-->
  <div class="form-group border-top">
=======
  <div class="col-4 offset-4">
  <form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">{{-- CSRF対策--}}
  <!--↓↓名前↓↓-->
  <!-- <div class="form-group border-top">
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
      <label for="name" class="control-label col-sm-2">名前:</label>
      <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" placeholder="名前を入力してください" autofocus>
      </div>
<<<<<<< HEAD
  </div>
=======
  </div> -->
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
  <!--↓↓件名↓↓-->
  <div class="form-group border-top">
    <label for="name" class="control-label col-sm-2">件名:</label>
    <div class="col-sm-10">
      <input type="text" name="title" id="title" class="form-control" placeholder="件名を入力してください" autofocus>
    </div>
  </div>
  <!--↑↑件名↑↑-->
  <!--↓↓メールアドレス↓↓-->
  <div class="form-group border-top">
<<<<<<< HEAD
    <label for="email" class="control-label col-sm-2">メールアドレス:</label>
=======
    <label for="email" class="control-label col-sm-4">メールアドレス:</label>
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
    <div class="col-sm-10">
      <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
    </div>
    </div>
    <!--↓↓本文↓↓-->
    <div class="form-group border-top border-bottom">
      <label for="tel" class="control-label col-sm-2">本文:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="body" id="body" rows="3" placeholder="お問い合わせ内容を入力してください" autofocus></textarea>
      </div>
    </div>
<<<<<<< HEAD
    <button class="btn btn-lg btn-primary center-block text-center" type="submit">送信</button>
</form>
=======
    <div class="col-6 offset-2 mb-5 mt-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">送信</button>
    </div>
  </form>
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
  </div>
  <!-- この間にコードを書く -->
  <!-- この間にコードを書く -->
  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 9a959c5eb9cb32e5fc26758bffc115a1a1f438e5
