@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <!-- ヘッダー -->
  <div class="  row p-0 ">
    @component('components.nav')
    @endcomponent
  </div>
  <!-- 登録フォーム -->
  <div class="row my-5 p-0 m-0 justify-content-center">
    <div class="col-md-8 " style="">
      <h2>ユーザー登録ページ</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group ">
          <label for="name" class=" col-form-label ">{{ __('ユーザー名') }}</label>

          <div class="">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group ">
          <label for="email" class=" col-form-label ">{{ __('メールアドレス') }}</label>

          <div class="">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group ">
          <label for="password" class=" col-form-label ">{{ __('パスワード') }}</label>

          <div class="">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group ">
          <label for="password-confirm" class=" col-form-label ">{{ __('パスワードの確認') }}</label>

          <div class="">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>
        <div class="card bg-primary text-light mb-4">
          <div class="card-body">
            <p>当社の個人情報保護方針について同意のうえお申し込みください。</p>
            <p>個人情報保護方針</p>
          </div>
        </div>
        <div class="form-group  mb-0">
          <div class=" ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">ユーザー登録する</button>
          </div>
        </div>
      </form>
    </div>

  </div>
  <!-- フッター -->
  <div class="  row p-0 ">
    @component('components.footer')
    @endcomponent
  </div>
</div>
@endsection
