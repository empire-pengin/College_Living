@extends('layouts.app')

@section('content')

<h1>検索結果</h1>
<!-- @if(isset($experiences)) -->
<table class="table">
  <tr>
    <th>大学名</th><th>学部</th><th>性別</th>
  </tr>
  @foreach($experiences as $experience)
    <tr>
      <td>{{$experience->college_name}}</td><td>{{$experience->undergraduate}}</td><td>{{$experience->sex}}</td>
    </tr>
  @endforeach
</table>
@endif
<!-- @if(!empty($message)) -->
<div class="alert alert-primary" role="alert">{{ $message}}</div>
@endif
</div>
@endsection
