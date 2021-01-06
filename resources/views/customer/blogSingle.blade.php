<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | E-Shopper</title>
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
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Latest From our Blog</h2>
						<div class="single-blog-post">
							<h3>{{$blogs[0]->blog_title}}</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i>{{$blogs[0]->bloger_name}}</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="/uploads/{{$blogs[0]->image}}" alt="">
							</a>
							<p>
								{{$blogs[0]->blog_drescription}}
							</p>
						</div>
					</div><!--/blog-post-area-->

					<div class="rating-area">
						<ul class="ratings">
							<li class="rate-this">Rate this item:</li>
							<li>
								<i class="fa fa-star color"></i>
								<i class="fa fa-star color"></i>
								<i class="fa fa-star color"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
							<li class="color">(6 votes)</li>
						</ul>
						<ul class="tag">
							<li>TAG:</li>
							<li><a class="color" href="">Pink <span>/</span></a></li>
							<li><a class="color" href="">T-Shirt <span>/</span></a></li>
							<li><a class="color" href="">Girls</a></li>
						</ul>
					</div><!--/rating-area-->

					<div class="socials-share">
						<a href=""><img src="/assets/customer/images/blog/socials.png" alt=""></a>
					</div><!--/socials-share-->

					@for ($i = 0; $i < count($comment); $i++)
					<div class="media commnets">
						<div class="media-body">
							<h4 class="media-heading">{{$comment[$i]->name}}</h4>
							<p>{{$comment[$i]->description}}</p>

							<div style="position: relative; bottom:10px;">
								@if ($comment[$i]->rating==0)
									<span class="fa fa-star"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
								@elseif ($comment[$i]->rating==1)
									<span class="fa fa-star checked"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
								@elseif ($comment[$i]->rating== 2)
									<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
								@elseif ($comment[$i]->rating== 3)
									<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
								@elseif ($comment[$i]->rating== 4)
									<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span>
								@else
									<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
								@endif
							</div>
							<div class="blog-socials">
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-dribbble"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								</ul>
								<a class="btn btn-primary" href="">Other Posts</a>
							</div>
						</div>
					</div>
					@endfor<!--Comments-->

					<div class="replay-box">
						<div class="row">
							<div class="col-sm-4">
								<h2>Leave a replay</h2>
								<form action="" method="POST">
									<div class="blank-arrow">
										<label>Your Name</label>
									</div>
									<span>*</span>
									<input type="text" name="name" placeholder="write your name...">
									<div class="blank-arrow">
										<label>Email Address</label>
									</div>
									<span>*</span>
									<input type="email" name="email" placeholder="your email address...">
									<div class="blank-arrow">
										<label>Rating</label>
									</div>
									<span>*</span>
									<div>
										<div style="font-family: 'Roboto,sans-serif'; display:flex;">
											1<input type="radio" id="1" name="star" value="1" style="margin-right: 10px">
											2<input type="radio" id="2" name="start" value="2" style="margin-right: 10px">
											3<input type="radio" id="3" name="star" value="3" style="margin-right: 10px">
											4<input type="radio" id="4" name="star" value="4" style="margin-right: 10px">
											5<input type="radio" id="5" name="star" value="5" style="margin-right: 10px">
										</div> 
									</div>							
									</div>
									<div class="col-sm-8">
										<div class="text-area">
											<div class="blank-arrow">
												<label>Your Name</label>
											</div>
											<span>*</span>
											<textarea name="description" rows="11"></textarea>
											<button type="submit" class="btn btn-primary">post comment</button>
										</div>
									</div>
						</form>
						</div>
					</div><!--/Repaly Box-->
				</div>	
			</div>
		</div>
	</section>

	@include('customer.footer')

  
    <script src="/assets/customer/js/jquery.js"></script>
	<script src="/assets/customer/js/price-range.js"></script>
	<script src="/assets/customer/js/jquery.scrollUp.min.js"></script>
	<script src="/assets/customer/js/bootstrap.min.js"></script>
    <script src="/assets/customer/js/jquery.prettyPhoto.js"></script>
    <script src="/assets/customer/js/main.js"></script>
</body>
</html>