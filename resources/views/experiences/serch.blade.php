@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- ヘッダー -->
  <div class="row">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- 検索 -->
  <div class="col-12 p-0 ">
    <!-- 検索ボタン -->
    <div class="d-flex justify-content-center my-3">
      <form class="form-inline"
      action="{{asset('experiences/serch')}}" method="post">
      {{ csrf_field()}}
      {{method_field('get')}}
      <div class="form-group">
        <label>名前</label>
        <input type="text" class="form-control c" placeholder="検索したい名前を入力してください" name="college_name">
      </div>
      <button type="submit" class="btn btn-primary ">検索</button>
    </form>
  </div>
</div>
<!-- 検索結果文 -->
<div class="col-10 offset-1">
@if(!empty($message))
  <div class="alert alert-primary" role="alert">
    {{ $message}}
  </div>
@endif
</div>
<!-- メインの体験談一覧 -->
<div class="">
  <!-- foreach -->

  @foreach($experience as $experiences)
  <a href="{{asset('experiences/'.$experiences->id)}}"
  style="text-decoration:none;">
    <div class="col-10 offset-1 border-top border-danger d-flex  text-dark">
      <img style="height:125px;width:125px;" class="mt-3 mb-3"
      src="{{asset('img/college/'.$experiences->image)}}" alt="">
      <div class="mt-3 mb-3 pl-2 flex-fill bd-highlight align-self-center">
        <ul style="list-style:none;">
          <li class="text-black-50">{{$experiences->created_at}}</li>
          <li>「{{$experiences->college_name.$experiences->undergraduate}}」の体験談</li>
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
