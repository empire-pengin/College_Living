@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class="row m-0 p-0 d-flex justify-content-center">
  <!-- タイトル -->
  <div class=" col-12 text-danger my-5 d-flex justify-content-center">
      <h1>{{$experience->college_name}}</h1>
    </div>
  <!-- ヘッダー画像 -->
  <div class="col-lg-8">
    @if(file_exists('img/college/'.$experience->image))
      <img class="w-100" src="{{asset('img/college/'.$experience->image)}}"  style="height: 500px" alt="">
      @else
      <img class="w-100" src="{{asset('storage/experience/'.$experience->image)}}"  style="height: 500px" alt="">
      @endif
  </div>
  <!-- 説明 -->
  <div class="col-lg-3 border-top border-bottom border-danger">
    <table class="pl-0 mt-5 mb-5 table" style="list-style:none;">
        <tbody>
          <tr>
            <th class=""><span class="text-danger"><i class="fas fa-graduation-cap text-dange"></i></span></th>
            <th>{{'学部 '.$experience->undergraduate}}</th>
          </tr>
          <tr>
            <th class=""><span class="text-danger"><i class="fas fa-yen-sign"></i></span></th>
            <th>{{'家賃 '. number_format($experience->rent)}}円</th>
          </tr>
          <tr>
            <th class=""><i><span class="text-danger"><span class="fas fa-user-circle text-danger "></i></th>
            <th>{{'性別 '.$experience->sex}}</th>
          </tr>
          <tr>
            <th class=""><span class="text-danger"><i class="fas fa-home text-dange"></i></span></th>
            <th>{{'居住地 '.$experience->where_live}}</th>
          </tr>
        <tbody>
      </table>
  </div>
  <!-- 文章 -->
  <div class="col-12 mt-5 ">
      <p>{{$experience->college_name.'大学の体験談へようこそ、下に詳細な記事があるから見ていってね！'}}</p>
  </div>
  </div>

  <div class="row px-0 mx-0  d-flex justify-content-center">
  <!-- 詳細 -->
    <div class="col-lg-5 bg-light py-3">
      <h1>詳細情報</h1>
      <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row">仕送り額</th>
              <td>{{ number_format($experience->remittance)}}円</td>
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
    <!-- 一人暮らしの感想 -->
    <div class="col-lg-5 bg-light py-3">
      <h1>一人暮らしの感想</h1>
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
<!-- オススメ体験談 -->
  <div class="d-flex justify-content-center row p-0 m-0">
    <div class="col-12">
      <h1 class="text-center text-danger my-5">オススメ体験談</h1>
    </div>
    @for($i=0;$i<=3;$i++)
    <div class="col-lg-5  bg-light d-flex p-2">
      <a class="d-flex"
      href="{{asset('experiences/'.$all[$i]->id)}}"style="text-decoration:none;">
          <img style="height:200px; width:250px;" src="{{asset('img/college/'.$all[$i]->image)}}" alt="">
          <ul class="pl-0 flex-fill bd-highlight align-self-center" style="list-style:none;">
            <li class=""><h3><span class="text-danger"><i class="fas fa-university fa-5x" style="font-size: 22px"></i></span>{{$all[$i]->college_name}}</h3>
            </li>
            <li class="border-bottom border-danger"><span class="text-danger">
              <i class="fas fa-graduation-cap"></i>
            </span>{{$all[$i]->undergraduate}}　<span class="text-danger"><i class="fas fa-user-circle">
            </i></span >{{$all[$i]->sex}}　<span class="text-danger"><i class="fas fa-yen-sign"></i></span>{{ number_format($all[$i]->rent)}}円
            </li>
          </ul>
        </a>
      </div>
    @endfor
  </div>

  <!-- フッター -->
  <div class="row p-0 m-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
@endsection
