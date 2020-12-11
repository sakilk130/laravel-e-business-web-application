@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Categories</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Category</th>
              <th>Description</th>
              <th>Creation Date</th>
              <th>Update Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-plus">1</td>
              <td>Electronics</td>
              <td>Mobile Phones</td>
              <td>17/11/2020</td>
              <td>17/11/2020</td>
              <td>
                <a
                style="color: green; font-weight:800"
                  href="/admin/edit_orders"
                  class="micon dw dw-edit-1"
                >
                  Edit</a
                > |
                <a
                style="color: red; font-weight:800"
                  href="/admin/edit_orders"
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
