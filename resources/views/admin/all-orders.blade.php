@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Orders</h2>
        <div>
            <input class="card-box mb-30"
            style="padding: 10px;
            font-size: 17px;
            border: 1px solid #1b00ff;
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
              <th>Name</th>
              <th>Email</th>
              <th>Contact No.</th>
              <th>Address</th>
              <th>Product Image</th>
              <th>Product Details</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Order Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody id="product_table">
            @for($i=0; $i<count($order); $i++)
            <tr>
              <td class="table-plus">{{ $i+1 }}</td>
              <td>{{ $order[$i]->name }}</td>
              <td>{{ $order[$i]->email }}</td>
              <td>+880{{ $order[$i]->phone }}</td>
              <td>{{ $order[$i]->address }}</td>
              <td><img style="height: 50px; weight:50px" src="/upload/{{ $order[$i]->product_image }}" alt=""></td>
              <td>{{ $order[$i]->product_name }} {{ $order[$i]->product_description }}</td>
              <td>{{ $order[$i]->quantity }}</td>
              <td>{{ ($order[$i]->product_price+$order[$i]->shipping_cost)-$order[$i]->product_discount }} BDT</td>
              <td>{{ $order[$i]->created_at }}</td>
              <td>{{ $order[$i]->status }}</td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
