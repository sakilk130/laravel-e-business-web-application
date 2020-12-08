@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20">Delivered Orders</h2>
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-plus">1</td>
              <td>Sakil Khan</td>
              <td>Sakilk130@gmail.com</td>
              <td>01721214996</td>
              <td>Dhaka, Bangladesh</td>
              <td>MacBook Pro 16GB 2021</td>
              <td>1</td>
              <td>2,20,000 BDT</td>
              <td>17/11/2020</td>
              <td>Delivered</td>
              <td>
                <a
                style="color: red; font-weight:800"
                href="/admin/delete_delivered_order"
                class="micon dw dw-delete-3"
              >
                Delete</a
              >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
