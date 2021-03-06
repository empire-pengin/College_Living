<div class="col-12 p-0 ">
  <!-- タイトル -->
  <nav class="navbar navbar-danger bg-danger d-flex justify-content-between text-light ">
    <span class="navbar-brand mb-0 h1 ">College Living</span>
    <div class=nav-item nav-link"">
      <a class="text-light" href="{{asset('experiences')}}">体験談</a>
      <a class="text-light mx-3" href="{{asset('')}}">ホーム</a>
      <a class="text-light " href="{{asset('items')}}">賃貸</a>
    </div>
    <div class="nav-item nav-link">
      @guest
      <a  href="{{ route('login') }}"  class="text-light mr-3">{{ __('Login') }}</a>
      @if (Route::has('register'))
      <a  href="{{ route('register') }}"  class="text-light">{{ __('Register') }}</a>
      @endif
      @else
        <a href=" " class="text-light mr-3">{{ Auth::user()->name }}</a>
        <a class="text-light " href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>

    @endguest
  </div>
</nav>

</div>
</div>
