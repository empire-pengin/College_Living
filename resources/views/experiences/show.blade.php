@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- 画面上部↓ -->
  <div class="row m-0 p-0">
    <!-- タイトル -->
    <div class="offset-1 col-10 text-danger my-5">
      <h1>{{$experience->college_name}}</h1>
    </div>
    <!-- 大学の画像表示 -->
    <div class="offset-1 col-7 ">
      <img class="w-100" src="{{asset('img/college/'.$experience->image)}}"  style="height: 500px" alt="">
    </div>
    <!-- 大学概要 -->
    <div class="col-3 border-top border-danger  mb-5">
      <ul class="pl-0 mb-5 pb-5" style="list-style:none;">
        <li class=""><i class="fas fa-graduation-cap">{{'学部 '.$experience->undergraduate}}</i></li>
        <li class=""><i class="fas fa-yen-sign">{{'家賃 '.$experience->rent}}</i></li>
        <li class=""><i class="fas fa-user-circle text-danger fa-3x">{{'性別 '.$experience->sex}}</i></li>
        <li class="border-bottom border-danger"><i class="fas fa-home">{{'住んでいる場所 '.$experience->where_live}}</i></li>
      </ul>
    </div>
    <div class="offset-1 col-10 my-5">
      <p>{{$experience->college_name.'大学の体験談へようこそ、下に詳細な記事があるから見ていってね！'}}</p>
    </div>
  </div>
  <!-- 画面上部↑ -->
  <!-- 画面中部↓ -->
  <div class="row p-0 m-0">
    <div class="offset-1 col-5 border-right bg-light">
      <!-- 見出し -->
      <div class="border-bottom border-danger text-danger">
        <h1>体験談詳細</h1>
      </div>
      <!-- 体験談詳細中身 -->
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="row">仕送り額</th>
            <td>{{$experience->remittance}}</td>
          </tr>
          <tr>
            <th scope="row">バイトやインターン</th>
            <td>{{$experience->part}}</td>
          </tr>
          <tr>
            <th scope="row">出身地</th>
            <td>{{$experience->from}}</td>
          </tr>
        </tbody>
      </table>
    </div>
     <div class="col-5 bg-light">
      <!-- 見出し -->
      <div class="border-bottom border-danger text-danger">
        <h1>体験談感想</h1>
      </div>
      <!-- 体験談感想中身 -->
      <div class="">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row">隣人トラブル</th>
              <td>{{$experience->troble}}</td>
            </tr>
            <tr>
              <th scope="row">友人関係</th>
              <td>{{$experience->frend}}</td>
            </tr>
            <tr>
              <th scope="row">一人暮らしで困ったこと</th>
              <td>{{$experience->accident}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- 画面中部↑ -->

  <!--↓画面下部↓ -->
  <div class="row p-0 m-0 d-flex justify-content-center">
    <div class=" col-12  text-danger my-5">
      <h1 class="text-center ">オススメ体験談</h1>
    </div class="">
    @for($i=0;$i<=3;$i++)
    <div class="col-md-5 m-1 d-flex bg-secondary">
      <img style="height:200px; width:250px;" src="{{asset('img/college/'.$all[$i]->image)}}" alt="">
        <ul class="pl-0" style="list-style:none;">
          <li class=""><i class="fas fa-university">{{$all[$i]->college_name}}</i>
</li>
          <li class=""><i class="fas fa-graduation-cap">{{'学部 '.$all[$i]->undergraduate}}</i></li>
          <li class=""><i class="fas fa-user-circle">{{'性別 '.$all[$i]->sex}}</i></li>
          <li class="border-bottom border-dange"><i class="fas fa-yen-sign">{{'家賃 '.$all[$i]->rent}}</i></li>
        </ul>
    </div>
    @endfor
  </div>
  <!-- 検索バー -->
  <div class="col-12  py-5  d-flex align-items-end justify-content-center">
      <!-- 検索ボタン -->
      <div class="p-4 bg-light border border-danger" style="opacity: 0.9;">
        <form class="form-inline justify-content-center" action="{{asset('items/serch')}}" method="post">
        {{ csrf_field()}}
        {{method_field('get')}}
        <div class="form-group">
          <input type="text" class="form-control " placeholder="大学名を入力" name="college_name">
        </div>
        <button type="submit" class="btn btn-danger">体験談を検索</button>
      </form>
    </div>
  </div>
</div>
<!-- ↑画面下部 -->
<!-- フッター -->
<div class="row p-0 m-0" style="">
  @component('components.footer')
  @endcomponent
</div>
</div>
@endsection
