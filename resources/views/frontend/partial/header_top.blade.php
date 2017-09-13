<!-- header -->


<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
			<div class="cart box_1">
				<a href="{{ url('cart') }}">
					<h3><img src="images/bag.png" alt="">Cart</h3>
				</a>	
				<p><a href="" class="">({{ Cart::count() }})</a></p>
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="">CHECKOUT</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue navbar nav nav-pills">
			<li class="grid"><?= Menu::display('main_menu', 'bootstrap'); ?></li>
		</ul>
		
		

</div>
</div>
