@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <!-- ヘッダー -->
  <div class="  row p-0 ">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- ログインフォーム -->
  <div class="  row p-0 m-0 justify-content-center my-5">
    <div class="col-md-8 " style="">
      <h2>ログインページ</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">メールアドレス</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">パスワード</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        </div>

        <div class="form-group ">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
              {{ __('パスワードを記憶する') }}
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">ログインする</button>
      </form>
    </div>
  </div>
  <!-- フッター -->
  <div class="  row p-0 m-0">
    @component('components.footer')
    @endcomponent
  </div>
</div>
@endsection
