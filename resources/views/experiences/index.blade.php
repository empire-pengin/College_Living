@extends('layouts.app')

@section('content')
<div class="container-fluid" >
  <!-- ヘッダー -->
  <div class="row ">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- 検索 -->
  <div class="col-12 p-0 my-3" >
    <!-- 検索ボタン -->
    <div class="d-flex justify-content-center ">
      <form class="form-inline"
      action="{{asset('experiences/serch')}}" method="post">
      {{ csrf_field()}}
      {{method_field('get')}}
      <div class="form-group">
        <!-- <label>名前</label> -->
        <input type="text" class="form-control " placeholder="大学名入力" name="college_name">
      </div>
      <button type="submit" class="btn btn-primary ">検索</button>
    </form>
  </div>
</div>
<!-- タイトル -->
<div class="col-12 d-flex justify-content-center pb-2" >
  <h3 style="color:#FF4500;">体験談</h3>
</div>
<!-- 画像 -->
<div class="col-10 offset-1 d-flex justify-content-center mb-5">
  <img class="img-fluid"
  src="{{asset('img/experience2.jpg')}}" alt="">
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
        <li>{{$experiences->id}}</li>
          <li class="text-black-50">{{$experiences->created_at}}</li>
          <li>「{{$experiences->college_name.$experiences->undergraduate}}」の体験談</li>
        </ul>
      </div>
    </div>
  </a>
  @endforeach
  <div class="my-5 col-12 d-flex justify-content-center " style="font-size:16px;">
    {{ $experience->links() }}
  </div>
</div>
<!-- フッター -->
@component('components.footer')
@endcomponent
</div>



@endsection
