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
    <input type="text" class="form-control " placeholder="検索したい名前を入力してください" name="college_name">
  </div>
  <button type="submit" class="btn btn-primary ">検索</button>
</form>
        </div>
      </div>
<!-- 画像 -->
<div class="col-10 offset-1 d-flex justify-content-center my-5">
  <img class="img-fluid" 
  src="{{asset('img/experience2.jpg')}}" alt="">
</div>
<!-- メインの体験談一覧 -->
<div class="">
@foreach($experience as $experiences)
<a href="{{asset('experiences/'.$experiences->id)}}">
  <div class="col-10 offset-1 border-top d-flex align-items-start ">
<img style="height:150px;width:150px;" class="mt-3 mb-3"
src="{{asset('img/college/'.$experiences->image)}}" alt="">
<div class="mt-3 mb-3 pl-2">
{{$experiences->created_at}}
<p class="py-0">{{$experiences->college_name.$experiences->undergraduate}}</p>
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
