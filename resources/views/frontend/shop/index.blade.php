@extends('frontend.layout.master')

@section('title')
	Handmade
@endsection

@section('content')
	
	<div class="special">
	<div class="container">
	{{-- @foreach($categories as $category) --}}
		<h3>{{-- {{ $category->name }} --}}</h3>
		<div class="specia-top">
			<ul class="grid_2">
				<div class="carousel carousel-showmanymoveone slide" id="carousel123">
    				<div class="carousel-inner">
						@include('frontend.partial.post')
					</div>
				</div>
				<div class="clearfix"> </div>
			</ul>
		</div>
	{{-- @endforeach --}}
	</div>
</div>


	{{-- <div id="jewelry">
		<div class="content">
			<div class="col-md-12"> 
				@foreach($categories as $category)     
		   		{{$category->name}}
			</div>
			<div class="col-md-10 col-md-offset-1" style="margin-top: 40px;">
				<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
					<div class="carousel-inner">
						 @include('frontend.partial.post')
  					</div>
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
		@endforeach
		</div>
	</div> --}}
@endsection