@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>

    <div class="col-5 my-4 mx-5 p-0 bg-light">
    <!-- <table class="table table-bordered mt-5">
      <tbody>
        <tr>
          <th scope="row">大学名</th>
          <td>{{$experience->college_name}}</td>
        </tr>
        <tr>
          <th scope="row">学部</th>
          <td>{{$experience->undergraduate}}</td>
        </tr>
        <tr>
          <th scope="row">住んでいる場所</th>
          <td>{{$experience->where_live}}</td>
        </tr>
        <tr>
          <th scope="row">家賃</th>
          <td>{{$experience->rent}}</td>
        </tr>
        <tr>
          <th scope="row">性別</th>
          <td>{{$experience->sex}}</td>
        </tr>
      </tbody>
    </table> -->
      <div class="mt-5">
        <div class="mt-1 mb-5">
         <h1>{{$experience->college_name." ".$experience->undergraduate}}</h1>
        </div>
        <!-- <div class="mt-1">
         <p>{{'学部：'.$experience->undergraduate}}</p>
        </div>
        <div class="mt-1">
          <p>{{'住んでいる場所：'.$experience->where_live}}</p>
        </div> -->
        <div class="mt-4 mb-5">
          <h2>{{'家賃：'.$experience->rent}}</h2>
        </div>
        <div class="col-3 mt-1">
          <h3>{{'性別'.$experience->sex}}</h3>
        </div>
      </div>
    </div>
    <div class="col-5 my-4 mx-5 p-0 shadow">
      <img src="{{asset('img/college/'.$experience->image)}}" alt=""
      class="img-fluid">
    </div>

  <div class=" p-0" style="">
      @component('components.footer')
      @endcomponent
  </div>
</div>
@endsection