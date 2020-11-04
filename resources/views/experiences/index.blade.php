@extends('layouts.app')

@section('content')
<h1>検索条件を入力してください</h1>
<form action="{{asset('experiences/serch')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>名前</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したい名前を入力してください" name="college_name">
  </div>
  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
@endsection
