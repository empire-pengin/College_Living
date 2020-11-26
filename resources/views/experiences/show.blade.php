@extends('layouts.app')
@section('title', '体験談詳細')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <div class="row">
    <div class="col-5 my-4 mx-5 p-0 shadow border">
    <table class="table table-bordered mt-5">

      <tbody>
        <tr>
          <th scope="row">{{$experience->college_name}}</th>
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
      </table>
      <!-- <div class="mt-5">
        <div class="border-bottom mt-1">
         <p>{{'大学名：'.$experience->college_name}}</p>
        </div>
        <div class="border-bottom mt-1">
         <p>{{'学部：'.$experience->undergraduate}}</p>
        </div>
        <div class="border-bottom mt-1">
          <p>{{'住んでいる場所：'.$experience->where_live}}</p>
        </div>
        <div class="border-bottom mt-1">
          <p>{{'家賃：'.$experience->rent}}</p>
        </div>
        <div class="border-bottom mt-1">
          <p>{{'性別:'.$experience->sex}}</p>
        </div>
      </div> -->
    </div>
    <div class="col-5 my-4 mx-5 p-0 shadow">
      <img src="{{asset('img/college/'.$experience->image)}}" alt="">
    </div>
  </div>

  <div class=" p-0" style="">
      @component('components.footer')
      @endcomponent
  </div>
</div>
@endsection