@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20">All Customers</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact No.</th>
              <th>Shipping Address</th>
              <th>Registration Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-plus">1</td>
              <td>Sakil Khan</td>
              <td>sakilk130@gmail.com</td>
              <td>01721214996</td>
              <td>Dhaka, Bangladesh.</td>
              <td>17/11/2020</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
