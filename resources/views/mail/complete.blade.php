@extends('layouts.app')
@section('title', 'お問い合わせフォーム')
@section('content')
<div id="app" class="container-fluid p-0">
  <!-- ヘッダー -->
  <div class=" sticky-top  p-0" style="">
    @component('components.nav')
    @endcomponent
  </div>
  <div class="alert alert-primary m-0" role="alert">お問い合わせありがとうございました
  </div>
  <!-- フッター -->
  <div class=" p-0" style="">
    @component('components.footer')
    @endcomponent
  </div>
</div>
@endsection