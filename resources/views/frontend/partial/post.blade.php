@foreach ($category->posts as $product)
<div class="item {{ $loop->first ? ' active' : '' }}">
  	<li>
	  <a href="/posts/{{ $product->id }}">
	  	<img src="storage/{{$product->image}}" class="img-responsive" style="height: 250px;">
	  	{{$product->title}}
	  </a>
	  <div class="special-info grid_1 simpleCart_shelfItem">
		<h5>Lorem ipsum dolor</h5>
		<div class="item_add"><span class="item_price"><h6>ONLY $40.00</h6></span></div>
		<div class="item_add"><span class="item_price"><a href="{{-- {{ url('cart') }} --}}">add to cart</a></span></div>
	</div>
	</li>
</div>
@endforeach
