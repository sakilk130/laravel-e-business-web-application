@for ($i = count($products)-1 ; $i > -1; $i--)
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="/uploads/{{$products[$i]->product_image}}" width="268px" height="225px" alt="" />
					<h2>${{$products[$i]->product_price}}</h2>
					<p>{{$products[$i]->product_name}}</p>
					<a href="{{route('product', [$shopName, $products[$i]->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				<div class="product-overlay">
				<div class="overlay-content">
					<h2>${{$products[$i]->product_price}}</h2>
					<p>{{$products[$i]->product_name}}</p>
					<a href="{{route('product', [$shopName, $products[$i]->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				</div>
			</div>
			@
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
				    <li><a href="{{route('wish', $shopName)}}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to cart</a></li>
				</ul>
				</div>
			</div>
	</div>
@endfor