
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
      <p>hogehogehogehogehogehogehogehogehogehoge</p>
    </div>
  </div>
    <!-- 画面上部↑ -->
    <!-- 画面中部↓ -->

    <!-- ↑画面中部 ↑-->
     <!--↓画面下部↓ -->
    <div class="row">
      <div class="offset-5 col-4  text-danger">
        <h1>おススメ体験談</h1>
      </div>

      @for($i=0;$i<=3;$i++)
        <div class="col-5"> 
          <img style="height:200px; width:150px;" src="{{asset('img/college/'.$all[$i]->image)}}" alt="">
        </div>
      @endfor
    </div>
    <!-- ↑画面下部 -->
    <!-- フッター -->
  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
@endsection