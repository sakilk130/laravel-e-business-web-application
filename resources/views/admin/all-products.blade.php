@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Products</h2>
        <div>
        <input class="card-box mb-30"
        style="padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
        margin-left:400px;
        margin-bottom:20px;
        max-width:300px"
        type="text" placeholder="Search..." id="search">
        </div>


        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Image</th>
              <th>Name</th>
              <th>Category</th>
              <th>Sub-Category</th>
              <th>Brand</th>
              <th>In Stock</th>
              <th>Price</th>
              <th>Creation Date</th>
              <th>Last Update</th>
            </tr>
          </thead>
          <tbody id="product_table">
            @for($i=0; $i<count($product); $i++)
            <tr>
              <td class="table-plus">{{ $i+1 }}</td>
              <td><img style="height: 50px; weight:50px" src="/upload/{{ $product[$i]->product_image }}" alt=""></td>
              <td>{{ $product[$i]->product_name}}</td>
              <td>{{ $product[$i]->category_name}}</td>
              <td>{{ $product[$i]->sub_category_name}}</td>
              <td>{{ $product[$i]->product_brand}}</td>
              <td>{{ $product[$i]->in_stock}}</td>
              <td>{{ $product[$i]->product_price}} BDT</td>
              <td>{{ $product[$i]->created_at}}</td>
              <td>{{ $product[$i]->updated_at}}</td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
