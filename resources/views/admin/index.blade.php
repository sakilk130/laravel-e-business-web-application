@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profile_image',$admin->image_profile)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

 <div class="main-container">
    <div class="pd-ltr-20" style=" width: 1240px;">
      <div class="card-box pd-20 height-100-p mb-30">
        <div class="row align-items-center">
          <div class="col-md-4">
            <img src="vendors/images/banner-img.png" alt="" />
          </div>
          <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
              Welcome back
              <div class="weight-600 font-30 text-blue">{{ $admin->username }}</div>
            </h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 mb-30">
          <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
              <div class="progress-data">
                <div id="">
                  <img src="vendors/images/logo/chart.svg" alt="" />
                </div>
              </div>
              <div class="widget-data">
                <div class="h4 mb-0">Total Products</div>
                <div class="weight-600 font-14">{{ count($product) }} products</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 mb-30">
          <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
              <div class="progress-data">
                <div id="">
                  <img src="vendors/images/logo/mine.svg" alt="" />
                </div>
              </div>
              <div class="widget-data">
                <div class="h4 mb-0">Pending Orders</div>
                <div class="weight-600 font-14">{{ count($pendingorder) }} Orders</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 mb-30">
          <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
              <div class="progress-data">
                <div id="">
                  <img src="vendors/images/logo/dollar.svg" alt="" />
                </div>
              </div>
              <div class="widget-data">
                <div class="h4 mb-0">Total Income</div>
                <div class="weight-600 font-14">{{ $sum }} BDT</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 mb-30">
          <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
              <div class="progress-data">
                <img src="vendors/images/logo/group.svg" alt="" />
                <div id=""></div>
              </div>
              <div class="widget-data">
                <div class="h4 mb-0">Total Users</div>
                <div class="weight-600 font-14">{{ count($customer) }} users</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-box mb-30">
        <h2 class="h4 pd-20">Pending Orders</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact No.</th>
              <th>Shipping Address</th>
              <th>Image</th>
              <th>Product Details</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Order Date</th>
              <th>Status</th>
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
              <td>{{ $order[$i]->product_price }}</td>
              <td>{{ $order[$i]->created_at }}</td>
              <td style="background-color:red; border: none; color: black; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;" >{{ $order[$i]->status }}</td>

            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
