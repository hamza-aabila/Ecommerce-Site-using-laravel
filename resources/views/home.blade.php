@extends('app')

@section('content')
               
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    
    @foreach($categories as $category)
    <div class="special">
        <div class="container">
        <h3>{{ $category->name }}</h3>
        <div class="specia-top">
            <ul class="grid_2">
                @foreach ($category->posts as $product)
                <div class="item {{ $loop->first ? ' active' : '' }}">
                <li>
                  <a href="/posts/{{ $product->id }}">
                    <img src="storage/{{$product->image}}" class="img-responsive" style="width: 400px;height: 250px;">
                  </a>
                  <div class="special-info grid_1 simpleCart_shelfItem">
                    <h5>{{$product->title}}</h5>
                    <div class="item_add"><span class="item_price"><h6>{{$product->price}}$</h6></span></div>
                    <div class="item_add"><span class="item_price"><a href=" {{ url('cart/addItem') }}/{{ $product->id }} ">add to cart</a></span></div>
                </div>
                </li>
            </div>
            
            @endforeach
            </ul>
        </div>
         </div>
          </div>
    @endforeach
   
   

@endsection
