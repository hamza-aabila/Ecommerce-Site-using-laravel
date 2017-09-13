<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script type='text/javascript' src="dist/js/jquery-1.11.1.min.js"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <link href="{{URL::asset('dist/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('dist/css/style.css')}}" rel='stylesheet' type='text/css' />

    {{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> --}}
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

    {{-- <link href="{{ URL::asset('dist/css/carousel.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
    <link href="{{ URL::asset('dist/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @include('frontend.partial.header_top')
        @yield('content')
        @yield('content1')
        @include('frontend.partial.arrival')
        

        @include('frontend.partial.footer')
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
        {{-- <script type='text/javascript' src="{{ URL::asset('dist/js/jquery-1.11.1.min.js')}}"></script> --}}
        <script type="text/javascript" src="{{ URL::asset('dist/js/megamenu.js')}}"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script src="{{ URL::asset('dist/js/menu_jquery.js')}}"></script>
        <script src="{{ URL::asset('dist/js/simpleCart.min.js')}}"> </script>
        
        <script type="text/javascript">
            (function(){
              // setup your carousels as you normally would using JS
              // or via data attributes according to the documentation
              // https://getbootstrap.com/javascript/#carousel
              $('#carousel123').carousel({ interval: 2000 });
              $('#carouselABC').carousel({ interval: 3600 });
            }());

            (function(){
              $('.carousel-showmanymoveone .item').each(function(){
                var itemToClone = $(this);

                for (var i=1;i<4;i++) {
                  itemToClone = itemToClone.next();

                  // wrap around if at end of item collection
                  if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                  }

                  // grab item, clone, add marker class, add to collection
                  itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-"+(i))
                    .appendTo($(this));
                }
              });
            }());
        </script>

        @yield('scripts')

    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
