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
</head><!--/head-->

<body>
   
    

    @include('customer.header');

      <div class="container"> 
        @for ($i = 0; $i < count($wish); $i++)
        @if ($wish[$i]->customer_id=$customer_id && $wish[$i]->shop_name=$shopName )

            @php
                $products = DB::table('products')
                        ->where('shop_name', $shopName)
                        ->where('id', $wish[$i]->product_id)
                        ->get();
            @endphp
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="/uploads/{{$products[0]->product_image}}" width="120px" height="255px" alt="" />
                            <h2>${{$products[0]->product_price}}</h2>
                            <p>{{$products[0]->product_name}}</p>
                            <a href="/{{$shopName}}/product/{{$products[0]->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Product</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endif
        @endfor              
        
      </div>

	{{-- footer --}}
	@include('customer.footer')
  
    <script src="/assets/customer/js/jquery.js"></script>
	<script src="/assets/customer/js/bootstrap.min.js"></script>
	<script src="/assets/customer/js/jquery.scrollUp.min.js"></script>
	<script src="/assets/customer/js/price-range.js"></script>
    <script src="/assets/customer/js/jquery.prettyPhoto.js"></script>
	<script src="/assets/customer/js/main.js"></script>
	<script src="assets/customer/js/ajax.js"></script>
	<script>

    </script>

    <script src="/assets/customer/js/jquery.js"></script>
	<script src="/assets/customer/js/price-range.js"></script>
    <script src="/assets/customer/js/jquery.scrollUp.min.js"></script>
	<script src="/assets/customer/js/bootstrap.min.js"></script>
    <script src="/assets/customer/js/jquery.prettyPhoto.js"></script>
    <script src="/assets/customer/js/main.js"></script>
</body>
</html>