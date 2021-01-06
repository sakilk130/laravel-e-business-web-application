<h2>Category</h2>
<div class="panel-group category-products" id="accordian"><!--category-productsr-->

    @for ($i = 0 ; $i < count($categories) ; $i++)
    @php
        $subcategories = DB::table('subcategories')
            ->where('shop_name', $shopName)
            ->where('category_id', $categories[$i]->id)
            ->get();
    @endphp 

    @if (count($subcategories)>0)
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        {{$categories[$i]->category_name}}
                    </a>
                </h4>
            </div>
            <div id="mens" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li><a href="#">{{$subcategories[$i]->sub_category_name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
    @else
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="#">{{$categories[$i]->category_name}}</a></h4>
            </div>
        </div>
    @endif

    @endfor
    
</div><!--/category-products-->
