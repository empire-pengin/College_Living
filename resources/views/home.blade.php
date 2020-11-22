@extends('layouts.app')

@section('content')
<div class="d-flex bd-highlight pr-0">
  <div class="  bd-highlight">
  @component('components.sidebar')
  @endcomponent
  </div>
  <div class="container-fluid  flex-grow-1 bd-highlight">
  <div class="row">
  @component('components.footer')
  @endcomponent
  </div>
  </div>
</div>
@endsection