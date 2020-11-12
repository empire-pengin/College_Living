@extends('layouts.app')

@section('content')
{{$experience->image}}
{{$experience->user_id}}
show
<img src="{{asset('img/college/'.$experience->image)}}" alt="">

@endsection