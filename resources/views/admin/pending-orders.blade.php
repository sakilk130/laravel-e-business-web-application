@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20" style="
    width: 1540px;">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Pending Orders</h2>
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @for($i=0; $i<count($order); $i++)
            <tr>
              <td class="table-plus">{{ $i+1 }}</td>
              <td>{{ $order[$i]->name }}</td>
              <td>{{ $order[$i]->email }}</td>
              <td>+88{{ $order[$i]->phone }}</td>
              <td>{{ $order[$i]->address }}</td>
              <td><img style="height: 50px; weight:50px" src="/upload/{{ $order[$i]->product_image }}" alt=""></td>
              <td>{{ $order[$i]->product_name }} {{ $order[$i]->product_description }}</td>
              <td>{{ $order[$i]->quantity }}</td>
              <td>{{ ($order[$i]->product_price+$order[$i]->shipping_cost)-$order[$i]->product_discount }} BDT</td>
              <td>{{ $order[$i]->created_at }}</td>
              <td style="background-color:red; border: none; color: black; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;" >{{ $order[$i]->status }}</td>
              <td>
                  <a class="btn btn-sm btn-info" href="{{route('admin.edit_orders', $order[$i]->id)}}">Edit</a>
              </td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
