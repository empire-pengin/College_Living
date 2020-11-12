<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- FontAwesome -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div id="app" class="container-fluid">
            <div class="row" style="">
                <!-- サイドバー -->
                <div class=" bg-dark  "style="">
                    <div class="sticky-top " style="width:220px;height:100vh;">
                    <img src="{{asset('img/logo.png')}}" alt="" class="w-100 pt-5 mt-3">
                    <ul class="pl-0" style="list-style:none;" >
                        <li class="pl-3 mt-4 h5"><a href="{{asset('experiences/create')}}" class="text-light">Write Experience</a></li>
                        <li class="pl-3  mt-4 h5 text-ligh"><a href="{{asset('experiences')}}" style="" class="text-light h5">Experience</a></li>
                        <li class="pl-3 mt-4 h5"><a href="{{asset('items')}}" class="text-light">Rent</a></li>
                        <li class="pl-3 mt-4 h5"><a href="" class="text-light">Service</a></li>
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
                        <a href=""><i class="fab fa-twitter-square text-white fa-2x"></i></i></a>
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
                <!-- サイドバーここまで -->
                
                <!-- main -->
                <div class="col-8" >
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- <script src=" {{ mix('js/app.js') }} "></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
