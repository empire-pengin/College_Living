@extends('layouts.app')

@section('content')
<div class="container-fluid" >
  <!-- ヘッダー -->
  <div class="row ">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- 検索 -->
  <div class="col-12 p-0" >
    <!-- 検索ボタン -->
    <!-- 検索バー -->
    <div class="row m-0 p-0" style="">
      <div class="col-12 p-0 ">
        <!-- 検索ボタン -->
        <nav class="navbar navbar-light bg-light py-2 mx-0 px-0">
          <div class="container">
            <a class="navbar-brand my-0 navbar_head" href="#" style="font-weight:bold;">体験談を検索する</a>
            <button type="button " class="navbar-toggler" data-toggle="collapse" data-target="#navbarList" aria-controls="navbarList" aria-expanded="false" aria-label="ナビゲーションの切替">
              <i class="text-danger fas fa-angle-down"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarList">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <div class="col-12 d-flex justify-content-center ">
                    <!-- ヘッダー物件検索 -->
                    <div class="col py-3" style="opacity: 0.9;">
                      <form action="{{asset('experiences/serch')}}" class="col-12"
                      class="form-inline " method="post">
                      {{ csrf_field()}}
                      {{method_field('get')}}
                      <div class="form-group">
                        <input type="text" class="form-control " placeholder="大学名" name="college_name">
                      </div>
                      <button type="submit" class="btn btn-outline-danger btn-block">大学を検索</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
<!-- タイトル -->
<div class="col-12 d-flex justify-content-center pb-2 pt-3" >
  <h3 style="color:#FF4500;">体験談</h3>
</div>
<!-- 画像 -->
<div class="col-10 offset-1 d-flex justify-content-center mb-5">
  <img class="img-fluid"
  src="{{asset('img/experience2.jpg')}}" alt="">
</div>
<div class="col-10 offset-1">
  @if(!empty($message))
  <div class="alert alert-primary" role="alert">
    {{ $message}}
  </div>
  @endif
</div>

<!-- メインの体験談一覧 -->
<div class="">
  @foreach($experience as $experiences)
  <a href="{{asset('experiences/'.$experiences->id)}}"
    style="text-decoration:none;">
    <div class="col-10 offset-1 border-top border-danger d-flex  text-dark">
      @if(file_exists('img/college/'.$experiences->image))
      <img style="height:125px;width:125px;" class="mt-3 mb-3"
      src="{{asset('img/college/'.$experiences->image)}}" alt="">
      @else
      <img style="height:125px;width:125px;" class="mt-3 mb-3"
      src="{{asset('storage/experience/'.$experiences->image)}}" alt="">
      @endif
      <div class="mt-3 mb-3 pl-2 flex-fill bd-highlight align-self-center">
        <ul style="list-style:none;">
          <li class="text-black-50">{{$experiences->created_at}}</li>
          <li>「{{$experiences->college_name.$experiences->undergraduate}}」に行っていた。</li>
          <li>{{ $all_user->find($experiences->user_id)->name }}さんの体験談</li>
        </ul>
      </div>
    </div>
  </a>
  @endforeach
</div>
<!-- フッター -->
@component('components.footer')
@endcomponent
</div>



@endsection
