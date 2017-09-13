@extends('app')

@section('content')
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	<div class="col-md-3 s-d">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<h4>All</h4>
			<ul>
				<li><a href="women.html">Jewelry</a></li>
				<li><a href="#">Painting</a></li>
				<li><a href="#">Sculpture</a></li>
				<li><a href="#">Wooden Toy</a></li>
			</ul>	
		</div>
		<h3>filter by</h3>
		<section  class="sky-form">
					<h4>catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Jewelry</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Painting</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sculpture</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Wooden Toy</label>
							</div>
						</div>
		</section>
	</div>
   </div>
	<!-- start content -->
	<div class="col-md-9 w_content">
		<div class="women">
			<a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 -->
		 @foreach($wooden_toy as $wooden_toys)
		<div class="grids_of_4">
		  <div class="grid1_of_4">
			<div class="content_box"><a href="">
		   	   	 <img src="../storage/{{$wooden_toys->image}}" style="width:150px; height: 200px;">
			   	  </a>
			   	  
			    <h4><a href="details.html"></a>{{$wooden_toys->title}}</h4>
			     <p>{{$wooden_toys->excerpt}}</p>
				 <div class="grid_1 simpleCart_shelfItem">
			    
				 <div class="item_add"><span class="item_price"><h6>{{$wooden_toys->price}}$</h6></span></div>
				<div class="item_add"><span class="item_price"><a href="{{ url('cart/addItem') }}/{{ $wooden_toys->id }}">add to cart</a></span></div>
				 </div>
		   	</div>
		</div>
		@endforeach	
	</div>
	<div class="clearfix"></div>
	
	<!-- end content -->
</div>
</div>
@endsection