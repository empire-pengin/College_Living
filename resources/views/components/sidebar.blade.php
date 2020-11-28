<!-- サイドバー -->
<div class="sticky-top px-0"style="">
  <div class=" bg-dark " style="width:220px;height:100vh;">
    <img src="{{asset('img/logo.png')}}" alt="" class="w-100 pt-5 mt-3">
    <ul class="pl-0" style="list-style:none;" >
      <li class="pl-3 mt-4 h5"><a href="{{asset('experiences/create')}}" class="text-light">Write Experience</a></li>
      <li class="pl-3  mt-4 h5 text-ligh"><a href="{{asset('experiences')}}" style="" class="text-light h5">Experience</a></li>
      <li class="pl-3 mt-4 h5"><a href="{{asset('items')}}" class="text-light">Rent</a></li>
      <!-- <li class="pl-3 mt-4 h5"><a href="" class="text-light">Service</a></li> -->
      @guest
      <li  class="pl-3 mt-4 h5">
        <a  href="{{ route('login') }}"  class="text-light">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li  class="pl-3 mt-4 h5">
        <a  href="{{ route('register') }}"  class="text-light">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li  class="pl-3 mt-4 h5 text-light">
        {{ Auth::user()->name }}
        <div class="mt-4" >
          <a class="text-light" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </li>
    @endguest
  </ul>
  <!-- SNS -->
  <div  class="pl-2 pt-5">
    <a href=""><i class="fab fa-facebook-square text-white fa-2x pr-2"></i></a>
    <a href=""><i class="fab fa-twitter-square text-white fa-2x"></i></a>
  </div>
  <!-- btn -->
  <div class="text-center px-2 pt-3">
    <button  class="btn btn-outline-light  btn-block ">Contact Us</button>
  </div>
  <div class="text-center pt-3">
    <button  class="btn btn-outline-light  " style="width:100px;">Line</button>
    <button  class="btn btn-outline-light  " style="width:100px;">メルマガ</button>
  </div>
  <div class="text-center px-2 pt-4 mb-5">
    <div class="dropdown">
      <button  class="btn btn-outline-light dropdown-toggle  btn-block
      id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"">Contact Us</button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">無料相談する</a>
        <a class="dropdown-item" href="#">セミナーへ参加する</a>
      </div>
    </div>
  </div>

</div>
</div>
