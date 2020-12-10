@extends('layouts.app')
@section('title', '体験談作成フォーム')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- {{var_dump($experience)}} -->

  <!-- タイトル -->
  <div class="col-8 offset-2 mt-3">
    <div class="text-center pb-5 pt-3 ">
      <h1 style="color:#FF4500;">Experiences Form</h1>
      <p>体験談絵を投稿して500ポイントをゲット！</p>
    </div>
  </div>

  <!-- フォーム中身 -->
  <div class="row d-flex justify-content-center p-0 m-0 ">
    <div class="col-lg-8 col-sm-10">
    <!--↑↑件名↑↑-->
    <form method="POST" action="{{asset('experiences/store')}}" enctype="multipart/form-data">
      @csrf
      <!--大学名  -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1 " class="mt-2">大学名</label>
        <input type="text" name="college_name" class="form-control bg-light" placeholder="大学名を入力してください">
      </div>
      <!-- 学部学科 -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">学部学科</label>
        <input type="text" name="undergraduate" class="form-control bg-light" placeholder="学部学科を入力してください">
      </div>
      <!-- 仕送り額 -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">仕送り額</label>
        <input type="text" name="remittance" class="form-control bg-light" placeholder="仕送り額を入力してください">
      </div>
      <!-- 家賃 -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">家賃</label>
        <input type="text" name="rent" class="form-control bg-light" placeholder="家賃を入力してください">
      </div>
      <!-- 住んでいる場所 -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">住んでいる場所</label>
        <input type="text" name="where_live" class="form-control bg-light" placeholder="住んでいる場所を入力してください">
      </div>
      <!-- 性別 -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">性別</label>
        <input type="text" name="sex" class="form-control bg-light" placeholder="性別を入力してください">
      </div>
      <!-- バイトやインターン -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">バイトやインターン</label>
        <input type="text" name="part" class="form-control bg-light" placeholder="バイトやインターンを入力してください">
      </div>
      <!-- 隣人トラブル -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">隣人トラブル</label>
        <input type="text" name="troble" class="form-control bg-light" placeholder="隣人トラブルを入力してください">
      </div>
      <!-- 友人関係 -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">友人関係</label>
        <input type="text" name="frend" class="form-control bg-light" placeholder="友人関係を入力してください">
      </div>
      <!-- 出身地 -->
      <div class="form-group border-top border-danger">
        <label for="exampleFormControlInput1" class="mt-2">出身地</label>
        <input type="text" name="from" class="form-control bg-light" placeholder="出身地を入力してください">
      </div>
      <!-- 一人暮らしで困ったこと -->
      <div class="form-group pb-2 border-top border-danger border-bottom">
        <label for="exampleFormControlInput1" class="mt-2">一人暮らしで困ったこと</label>
        <input type="text" name="accident" class="form-control bg-light" placeholder="一人暮らしで困ったことを入力してください">
      </div>
      <!-- 画像 -->
      <span class="filelabel" title="ファイルを選択">
        <span id="selectednum">画像を選択</span>
      </span>
      <input type="file" style="" class="" id="" aria-describedby="" name="image">
      <div class="col-12 mb-5 mt-4">
        <button class="btn  btn-lg  btn-outline-danger btn-block" type="submit">送信する</button>
      </div>
    </form>
  </div>
  </div>
  <!-- フッター -->
  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>

@endsection
