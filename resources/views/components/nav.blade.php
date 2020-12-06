<!-- pc用nav -->
<div class="col-12 p-0 d-none d-md-block ">
  <!-- タイトル -->
  <nav class="navbar navbar-danger bg-danger d-flex justify-content-between text-light ">
    <a class="navbar-brand mb-0 h1 text-light" href="{{asset('')}}">College Living</a>
    <div class="nav-item nav-link" id="navbarTogglerDemo02">
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

<!-- レスポンシブ用nav -->
<div class="col-12 p-0 d-md-none">
  <!-- タイトル -->
  <nav class="navbar navbar-danger bg-danger d-flex justify-content-center text-light sticky-top">
    <a class="navbar-brand mb-0 h1 text-light" href="{{asset('')}}">College Living</a>
    <button class="navbar-toggler border border-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-light "></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item border-top">
        <a class="nav-link text-light" href="{{asset('')}}">ホーム <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item border-top">
        <a class="nav-link  text-light" href="{{asset('items')}}">賃貸</a>
      </li>
      <li class="nav-item border-top">
        <a class="nav-link  text-light" href="{{asset('experiences')}}">体験談</a>
      </li>
      <li class="nav-item border-top dropdown">
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
      </li>
    </ul>
  </div>
  </nav>

</div>
</div>
