{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link href="{{URL::asset('dist/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{ URL::asset('dist/css/style.css')}}" rel='stylesheet' type='text/css' />

        {{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> --}}
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

        {{-- <link href="{{ URL::asset('dist/css/carousel.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
        <link href="{{ URL::asset('dist/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />


        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }*/

            /*.full-height {
                height: 100vh;
            }*/

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        @yield('styles')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
        @include('frontend.partial.header_top')
         <div class="special">
            <div class="container">
            @foreach($categories as $category)
                <h3>{{ $category->name }}</h3>
                <div class="specia-top">
                    <ul class="grid_2">
                        @foreach ($category->posts as $product)
                            <img src="storage/{{$product->image}}" class="img-responsive" style="height: 250px;">
                            {{$product->title}}
                        @endforeach 
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            @endforeach
            </div>
        </div>    
        @yield('content')
        @include('frontend.partial.arrival')
        

        @include('frontend.partial.footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
    </body>
</html>
 --}}