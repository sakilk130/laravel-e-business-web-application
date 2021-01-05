<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">recommended items</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        @for($i = count($wish)-1 ; $i > -1; $i--)
            <div class="carousel-inner">
                <div class="item active">	
                    
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/uploads/{{$wish[$i]->product_image}}" width="120px" height="175px" alt="" />
                                        <h2>${{$wish[$i]->product_price}}</h2>
                                        <p>{{$wish[$i]->product_name}}</p>
                                        <a href="/{{$shopName}}/product/{{$wish[$i]->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Product</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="item">	

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/uploads/{{$wish[$i]->product_image}}" width="120px" height="175px" alt="" />
                                    <h2>${{$wish[$i]->product_price}}</h2>
                                    <p>{{$wish[$i]->product_name}}</p>
                                    <a href="/{{$shopName}}/product/{{$wish[$i]->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Product</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>			
    </div>
</div><!--/recommended_items-->