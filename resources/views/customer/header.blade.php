<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> {{$shop[0]->phone}}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> {{$shop[0]->email}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="/upload/{{$shop[0]->shop_logo}}" height="40px" width="auto" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-user"></i>{{$customer}}</a></li>
                            <li><a href="{{route('wish', $shopName)}}"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="{{route('cart', $shopName)}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="{{route('shop.logout', $shopName)}}"><i class="fa fa-lock"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Catagory</a></li>
                                    <li><a href="cart.html">Cart</a></li> 
                                    <li><a href="login.html">Login</a></li> 
                                </ul>
                            </li> 
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Write a Blog</a></li>
                                </ul>
                            </li> 
                            <li><a href="404.html">404</a></li>
                            <li><a href="/{{$shopName}}/order">Order Histry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" id="live" name="live" placeholder="Search" autocomplete="off"/>
                        <table >
                            <tbody id="tbody" class="table table-dark col-sm-3 mt-sm-2 p-5" style="background-color: #f0f0e9; font-family: 'Roboto,sans-serif'">
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<script src="/assets/customer/js/jquery.js"></script>
<script src="/assets/customer/js/price-range.js"></script>
<script src="/assets/customer/js/jquery.scrollUp.min.js"></script>
<script src="/assets/customer/js/bootstrap.min.js"></script>
<script src="/assets/customer/js/jquery.prettyPhoto.js"></script>
<script src="/assets/customer/js/main.js"></script>


<script>
    $(document).ready(function() {

        $('#live').on('keyup', function() {
            var value = $(this).val();
            
            $.ajax({
                type: 'post',
                url: '{{ route("liveSearch", $shopName) }}',
                data: {
                    'live': value
                },
                success: function(data) {
                    var new_data = JSON.parse(data);
                    var tableRow='';
                    $("#tbody").html('');
                
                    if(value.length==0){
                        $("#tbody").html('');
                    
                    }else{
                        
                        $.each( new_data, function( index, value ){
                        
                            tableRow = "<a href='/{{$shopName}}/product/"+value.id+"'><tr style='padding-bottom:205px'><td><img src='/uploads/"+value.product_image+"' alt='' height='40px'></td><td style='font-size:14px; width:76px'>"+value.product_name+"</td></tr></a>";
                        
                            $("#tbody").append(tableRow);
                        });
                    }
                    
                },

            });
            
            
        });

    });
</script>