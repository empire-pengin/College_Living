@extends('layouts.app')

@section('content')
<div style="margin-top:50px;">
<h1>検索結果</h1>
@if(isset($items))
<table class="table">
  <tr>
    <th>物件名</th><th>駅</th><th>住所</th>
  </tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td><td>{{$item->station}}</td><td>{{$item->adress}}</td>
    </tr>
  @endforeach
</table>
@endif
@if(!empty($message))
<div class="alert alert-primary" role="alert">{{ $message}}</div>
@endif
</div>
@endsection
