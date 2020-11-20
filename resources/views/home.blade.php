@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        @component('components.sidebar')
        @endcomponent
        <div class="col-2">
        @foreach($experience as $experiences)
        <p>s</p>
        @endforeach
        </div>
    </div>
</div>
@endsection