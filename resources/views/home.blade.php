@extends('layouts.app')

@section('content')
<div class="d-flex bd-highlight pr-0">
  <div class="  bd-highlight">
  @component('components.sidebar')
  @endcomponent
  </div>
  <div class="container-fluid  flex-grow-1 bd-highlight">
  <!-- ヘッダー -->
  <div class="row">
  ss
  </div>
  <!-- 体験談表示 -->
  <div class="row  bg-primary">
  @for($i=0;$i<=2;$i++)
  <div class="col-3 shadow">
    <img  src="{{ asset('img/college/'. $experience[$i]->image )}}"
      class="img-fluid" alt="" style="">
  </div>
  @endfor
  </div>
  <!-- 物件表示 -->
  <div class="row">
  ss
  </div>
  <!-- フッター -->
  <div class="row">
  @component('components.footer')
  @endcomponent
  </div>
  </div>
</div>
@endsection