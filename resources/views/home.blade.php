@extends('layouts.app')

@section('content')
home

@foreach($experience as $experiences)

<div class=col-5>
<img src="{{asset('img/college/'.$experiences->image)}}" alt="">

</div>
@endforeach
@endsection

