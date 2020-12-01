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
    <div class="col-3 border-top border-danger border-danger pb-5" style="font-size: 22px;">
      <ul class="pl-0 mt-5 mb-5 " style="list-style:none;">
        <li class=""><span class="text-danger"><i class="fas fa-graduation-cap text-dange"></i></span>{{'学部 '.$experience->undergraduate}}
        </li>
        <li class=""><span class="text-danger">
        <i class="fas fa-yen-sign">
        </i></span>{{'家賃 '.$experience->rent}}</li>
        <li class=""><i><span class="text-danger">
        <span class="fas fa-user-circle text-danger ">
        </i>{{'性別 '.$experience->sex}}
        </li>
        <li class="border-bottom border-danger pb-5"><span class="text-danger">
        <i class="fas fa-home text-dange">
        </i></span>{{'住んでいる場所 '.$experience->where_live}}
        </li>
      </ul>
    </div>
    <div class="offset-1 col-10 my-5">
      <p>{{$experience->college_name.'大学の体験談へようこそ、下に詳細な記事があるから見ていってね！'}}</p>
    </div>
  </div>
  <!-- 画面上部↑ -->
  <!-- 画面中部↓ -->
  <div class="row p-0 m-0">
    <div class="offset-1 col-5 border-right border-danger bg-light">
      <!-- 見出し -->
      <div class="border-bottom border-danger text-danger">
        <h1>詳細情報</h1>
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
        <h1>一人暮らしの感想</h1>
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
    <div class="col-md-5 m-3 d-flex bg-light px-0">
      <img style="height:200px; width:250px;" src="{{asset('img/college/'.$all[$i]->image)}}" alt="">
        <ul class="pl-0 flex-fill bd-highlight align-self-center" style="list-style:none;">
          <li class=""><h3><span class="text-danger"><i class="fas fa-university fa-5x" style="font-size: 22px"></i></span>{{$all[$i]->college_name}}</h3>
</li>
          <li class="border-bottom border-danger"><span class="text-danger">
          <i class="fas fa-graduation-cap"></i>
          </span>{{$all[$i]->undergraduate}}　<span class="text-danger"><i class="fas fa-user-circle">
          </i></span >{{$all[$i]->sex}}　<span class="text-danger"><i class="fas fa-yen-sign"></i></span>{{$all[$i]->rent}}
          </li>
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
