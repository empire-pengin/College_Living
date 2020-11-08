@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('experiences.store') }}" enctype="multipart/form-data">
    @csrf
</form>

@endsection