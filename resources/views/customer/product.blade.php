<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="/assets/customer/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/customer/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/customer/css/prettyPhoto.css" rel="stylesheet">
    <link href="/assets/customer/css/price-range.css" rel="stylesheet">
    <link href="/assets/customer/css/animate.css" rel="stylesheet">
	<link href="/assets/customer/css/main.css" rel="stylesheet">
	<link href="/assets/customer/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/assets/customer/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/customer/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/customer/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/customer/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/assets/customer/images/ico/apple-touch-icon-57-precomposed.png">
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.checked {
  			color: orange;
		}
		.un_checked {
  			color: white;
			border: solid 3px;
			border-color: #f79831;
		}

	</style>
</head><!--/head-->

<body>

	@include('customer.header');
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">

						@include('customer.cetagory')

						
						<div class="shipping text-center"><!--shipping-->
							<img src="/assets/customer/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-6">
							<div class="view-product">
								<img src="/uploads/{{$products[0]->product_image}}" alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    {{-- <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="/assets/customer/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="/assets/customer/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="/assets/customer/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="/assets/customer/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="/assets/customer/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="/assets/customer/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="/assets/customer/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="/assets/customer/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="/assets/customer/images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div> --}}

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>

						@php
							$time = strtotime($products[0]->created_at);
							$newformat = date('Y-m-d',$time);
							$today = date("Y-m-d");
							$dateDiff = strtotime($today) - strtotime($newformat); 	
						@endphp
						
						<div class="col-sm-6">
							<div class="product-information"><!--/product-information-->
								@if ($dateDiff/86400 < 30)
									<img src="/assets/customer/images/product-details/new.jpg" class="newarrival" alt="" />
								@endif
								
								<h1>{{$products[0]->product_name}}</h1>
								<div style="position: relative; bottom:10px;">
									@if ($avarage_star==0)
										<span class="fa fa-star"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
									@elseif ($avarage_star==1)
										<span class="fa fa-star checked"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
									@elseif ($avarage_star== 2)
										<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
									@elseif ($avarage_star== 3)
										<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
									@elseif ($avarage_star== 4)
										<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span>
									@else
										<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
									@endif
								</div>

								<form action="" method="POST">
									<span>
										<span>${{$products[0]->product_price}}</span>
										<label>Quantity:</label>

										<input type="hidden" name="product_id" value="{{$products[0]->id}}" />
										<input type="number" name="quantity" value="1" />
										<button type="submit" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
										</button>

									</span>
								</form>

								<p><b>Availability:</b> 
									@if ($products[0]->in_stock > 0)
										In stock
									@else 
										Out of Stock	
									@endif </p>

								<p><b>Condition:</b> 
									@if ($dateDiff/86400 > 30)
										Old
									@else 
										New	
									@endif </p>
								</p>
								<p><b>Brand:</b> {{$products[0]->product_brand}}</p>
								{{-- <a href=""><img src="/assets/customer/images/product-details/share.png" class="share img-responsive"  alt="" /></a> --}}
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Other Products</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<p>{{$products[0]->product_description}}</p>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											@if (count($findByBrand)>0)
												<div class="productinfo text-center">
													<img src="/uploads/{{$findByBrand[0]->product_image}}" alt="" />
													<h2>${{$findByBrand[0]->product_price}}</h2>
													<p>{{$findByBrand[0]->product_name}}</p>
													<a href="{{route('product', [$shopName,$findByBrand[0]->id])}}">
														<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
													</a>
												</div>	
											@else
												<p style="text-align: center"> No data avaiable</p>
											@endif
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
								@for ($i = 0; $i < count($review); $i++)
									<div style="margin-bottom: 20px">	
										<ul>
											<li><a href=""><i class="fa fa-user"></i>{{$review[$i]->review_name}}</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>{{$review[0]->created_time}}</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>{{$review[0]->created_at}}</a></li>
										</ul>
										
										<p>{{$review[$i]->ditails}}</p>
										@if ($review[$i]->star==1)
											<span class="fa fa-star checked"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
										@elseif ($review[$i]->star==2)
											<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
										@elseif ($review[$i]->star==3)
											<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
										@elseif ($review[$i]->star==4)
											<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span>
										@else
											<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
										@endif
									</div>
								@endfor
								

										
									<p><b>Write Your Review</b></p>
									
									<form action="{{route('product.rating', [$shopName, $products[0]->id])}}" method="POST">
										<span>
											<input type="hidden" name="product_id" value="{{$products[0]->id}}"/>
											<input type="text" name="review_name" placeholder="Your Name"/>
											<input type="email" name="review_email" placeholder="Email Address"/>
										</span>
										<textarea name="ditails" ></textarea>
										<div style="display: flex;">
											<h4 style="position: relative;bottom: 10px; margin-right: 1rem; color: #f79831;">Rating:</h4>
											<div style="font-family: 'Roboto,sans-serif'; font-size:14px">
												<input type="radio" id="1" name="star" value="1" style="margin-right: 5px">
												<label for="1" style="margin-right: 10px">1</label>
												<input type="radio" id="2" name="start" value="2" style="margin-right: 5px">
												<label for="2" style="margin-right: 10px">2</label>
												<input type="radio" id="3" name="star" value="3" style="margin-right: 5px">
												<label for="3" style="margin-right: 10px">3</label>
												<input type="radio" id="4" name="star" value="4" style="margin-right: 5px">
												<label for="4" style="margin-right: 10px">4</label>
												<input type="radio" id="5" name="star" value="5" style="margin-right: 5px">
												<label for="5" style="margin-right: 10px">5</label>
											</div> 
										</div>
										<button type="submit" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					{{-- recomandede --}}
					@include('customer.recomand');
					
				</div>
			</div>
		</div>
	</section>
	
	{{-- footer --}}
	@include('customer.footer')
  
    <script src="/assets/customer/js/jquery.js"></script>
	<script src="/assets/customer/js/price-range.js"></script>
    <script src="/assets/customer/js/jquery.scrollUp.min.js"></script>
	<script src="/assets/customer/js/bootstrap.min.js"></script>
    <script src="/assets/customer/js/jquery.prettyPhoto.js"></script>
    <script src="/assets/customer/js/main.js"></script>
</body>
</html>