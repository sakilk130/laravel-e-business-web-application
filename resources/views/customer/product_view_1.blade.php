@for ($i = count($products)-1 ; $i > -1; $i--)
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="/uploads/{{$products[$i]->product_image}}" width="268px" height="225px" alt="" />
					<h2>${{$products[$i]->product_price}}</h2>
					<p>{{$products[$i]->product_name}}</p>
					<a href="{{route('product', [$shopName, $products[$i]->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Product</a>
					</div>
				<div class="product-overlay">
				<div class="overlay-content">
					<h2>${{$products[$i]->product_price}}</h2>
					<p>{{$products[$i]->product_name}}</p>
					<a href="{{route('product', [$shopName, $products[$i]->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Product</a>
				</div>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<input type="hidden"  id="product_id" value="{{$products[$i]->id}}">
					@php
						$customer_check =  DB::table('customers')->where('name', $customer)
											->get();
						$customer_id = $customer_check[0]->id;
													
						$check = DB::table('wish')
								->where('product_id', $products[$i]->id)
								->where('customer_id', $customer_id)
								->where('shop_name', $shopName)
								->get();
					@endphp

					@if (count($check)>0)
						<li ><a href="#" class="btn_hov" style="color: #f79831; text-align: center"><i class="fa fa-plus-square"></i> Add to wishlist</a></a></li>
						{{-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to cart</a></li> --}}
					@else
						<li ><a href="/{{$shopName}}/wish/{{$products[$i]->id}}" class="btn_hov"><i class="fa fa-plus-square"></i> Add to wishlist</a></li>
						{{-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to cart</a></li> --}}
					@endif
				    
				</ul>
				</div>
			</div>
	</div>
@endfor