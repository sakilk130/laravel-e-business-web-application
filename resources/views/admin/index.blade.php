
@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')

 <div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box pd-20 height-100-p mb-30">
        <div class="row align-items-center">
          <div class="col-md-4">
            <img src="vendors/images/banner-img.png" alt="" />
          </div>
          <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
              Welcome back
              <div class="weight-600 font-30 text-blue">Profile Name!</div>
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
                <div class="weight-600 font-14">100 products</div>
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
                <div class="weight-600 font-14">500 Orders</div>
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
                <div class="weight-600 font-14">20,000 BDT</div>
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
                <div class="weight-600 font-14">2,000 users</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-box mb-30">
        <h2 class="h4 pd-20">Recent Orders</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact No.</th>
              <th>Shipping Address</th>
              <th>Product Details</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Order Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td class="table-plus">1</td>
              <td>Sakil Khan</td>
              <td>sakilk130@gmail.com</td>
              <td>01721214996</td>
              <td>Dhaka, Bangladesh</td>
              <td>Apple, imac-2017, Ram:8GB,256GB SSD</td>
              <td>1</td>
              <td>98000</td>
              <td>10/12/2020</td>
              <td>Pending</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
