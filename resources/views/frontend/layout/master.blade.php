<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<link href="{{URL::asset('dist/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{ URL::asset('dist/css/style.css')}}" rel='stylesheet' type='text/css' />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	{{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> --}}
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

	{{-- <link href="{{ URL::asset('dist/css/carousel.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
	<link href="{{ URL::asset('dist/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />

	@yield('styles')
</head>
<body>
	@include('frontend.partial.header_top')
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

	
	
	
	
	
	
	
