<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
</head>
<!--/head-->

<body>
    @include('customer.header');

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($cart)>0)
                        @for ($i = 0; $i < count($cart); $i++)
                        
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="/uploads/{{$cart[$i]->product_image}}" height="100px" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{$cart[$i]->product_name}}</a></h4>
                                <p>Avaiable products: {{$cart[$i]->in_stock}}</p>
                            </td>
                            <td class="cart_price">
                                <p>${{$cart[$i]->product_price}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <input class="cart_quantity_input" disabled type="text" name="quantity" value="{{$cart[$i]->quantity}}" autocomplete="off" size="2">
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">${{$cart[$i]->quantity*$cart[$i]->product_price}}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{route('cart.delete', [$shopName, $cart[$i]->cart_id])}}"><i class="fa fa-times"></i></a>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Order
                                </button>
                            </td>
                        </tr>

                    @endfor
                @else
                <tr>
                    <td><p style="text-align: center; margin-top: 20px">You have No cart</p> </td>
                </tr>
                @endif
                    
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <!--/Footer-->
    @include('customer.footer')



    <script src="/assets/customer/js/jquery.js"></script>
    <script src="/assets/customer/js/bootstrap.min.js"></script>
    <script src="/assets/customer/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/customer/js/jquery.prettyPhoto.js"></script>
    <script src="/assets/customer/js/main.js"></script>
</body>

</html>