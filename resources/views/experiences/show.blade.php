@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>

  <div class="row p-0 m-0">
    <!-- 上部左側文章 -->
    <div class="col-4 my-4 mx-5 p-0 bg-light">
      <div class="mt-5">
      <!-- この辺はUlとli使うのはどうでしょう？ -->
        <div class="mt-1 mb-5">
          <h1>{{$experience->college_name." ".$experience->undergraduate}}</h1>
        </div>
        <div class="mt-4 mb-5">
          <h2>{{'家賃：'.$experience->rent}}</h2>
        </div>
        <div class="mt-1">
          <h3>{{'性別'.$experience->sex}}</h3>
        </div>
      </div>
    </div>
    <!-- 上部画像 -->
    <div class="col-5 my-4 mx-5 p-0 shadow">
      <img src="{{asset('img/college/'.$experience->image)}}" alt=""
      class="img-fluid">
    </div>
  </div>
  <!-- 下部左側MAP -->

  <!-- 下部右側文章 -->

  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
@endsection
