@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <div class="row m-0 p-0">
    <!-- 画面上部↓ -->
    <!-- タイトル -->
    <div class="offset-1 col-10  text-danger">
      <h1>{{$experience->college_name}}</h1>
    </div>
    <!-- 大学の画像表示 -->
    <div class="offset-1 col-7 ">
      <img class="w-100" src="{{asset('img/college/'.$experience->image)}}"  style="height: 500px" alt="">
    </div>
    <!-- 大学概要 -->
    <div class="col-3 border-top border-danger">
      <div class="mt-5 mb-5">
        <h3>{{'学部：'.$experience->undergraduate}}</h3>
      </div>
      <div class="mt-5 mb-5">
        <h3>{{'家賃：'.$experience->rent}}</h3>
      </div>
      <div class="mt-5 mb-5">
        <h3>{{'性別：'.$experience->sex}}</h3>
      </div>
      <div class="">
        <h3>{{'住んでいる場所：'.$experience->where_live}}</h3>
      </div>
    </div>
    <div class="offset-1 col-10 ">
      <p>{{$experience->college_name.'大学の体験談へようこそ、下に詳細な記事があるから見ていってね！'}}</p>
    </div>
  </div>
    <!-- 画面上部↑ -->
    <!-- 画面中部↓ -->
    <div class="row p-0 m-0">
      <!-- 体験談詳細 -->
      <div class="offset-1 col-5 border-right bg-light">
        <!-- 見出し -->
        <div class="border-bottom border-danger text-danger">
          <h1>体験談詳細</h1>
        </div>
        <!-- 体験談詳細中身 -->
        <div class="">
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
    <!-- ↑画面中部 ↑-->
     <!--↓画面下部↓ -->
    <div class="row p-0 m-0">
      <div class="offset-5 col-4  text-danger">
        <h1>おススメ体験談</h1>
      </div>
      <div class="row pl-2 offset-1">
      @for($i=0;$i<=3;$i++)
          <div class="col-md-5 m-1  shadow">
            <div class="">
            <img style="height:200px; width:150px;" src="{{asset('img/college/'.$all[$i]->image)}}" alt="">
              <div class="bg-white" style="">
                <h5 class="">{{$all[$i]->troble}}</h5>
                  <div>
                    <span>{{$all[$i]->frend}}</span>
                    <span>{{$all[$i]->accident}}</span>
                  </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
    <!-- ↑画面下部 -->
    <!-- フッター -->
  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
@endsection