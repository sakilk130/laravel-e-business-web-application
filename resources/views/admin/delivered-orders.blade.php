@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20" style="width: 1540px;">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Delivered Orders</h2>
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="taskTableBody">
            @for($i=0; $i<count($order); $i++)
            <tr data-id="{{ $order[$i]->id }}">
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
                <td style="background-color:green; border: none; color: black; padding: 15px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;" >{{ $order[$i]->status }}</td>
                <td>
                <a href="#" data-toggle="modal" data-target="#deleteTask"  class="btn btn-sm btn-danger delete">Delete</a>
                </td>
              </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="deleteTaskTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <form id="deleteTaskForm">
                <div class="modal-header">
                <h5 class="modal-title" id="deleteTaskTitle">Delete Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-center">
                    <div id="deleteTaskMessage"></div>
                    <h4>Are you want to delete this?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </div>
            </form>
          </div>
        </div>
</div>

@endsection
