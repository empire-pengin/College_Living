@extends('layouts.app')

@section('content')
<div class="container-fluid">
<!-- ヘッダー -->
  <div class="row">
    @component('components.nav')
    @endcomponent
  </div>
<!-- 検索 -->
<div class="row" style="">
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
    </div>
<!-- 画像 -->
<div class="row bg-light p-0" >
  <div class="col-8 offset-2 d-flex justify-content-center">
  <img class="img-fluid" 
  src="{{asset('img/experience.jpg')}}" alt="">
  </div>
</div>
<!-- メインの体験談一覧 -->
<div class="row p-0">
@foreach($experience as $experiences)
<div class="col-8 offset-2 border-top d-flex align-items-start">
<img style="height:120px;width:120px;"
src="{{asset('img/college/'.$experiences->image)}}" alt="">
<div class="">
<p>{{$experiences->created_at}}</p>
<p>{{$experiences->college_name.$experiences->undergraduate}}</p>
<a href="{{asset('experiences/'.$experiences->id)}}">リンク</a>
</div>
</div>
@endforeach
<div class="my-5 col-12 d-flex justify-content-center " style="font-size:16px;">
        {{ $experience->links() }}
      </div>
</div>
<!-- フッター -->
  <div class="row p-0">
    @component('components.footer')
    @endcomponent
  </div>
</div>


@endsection
