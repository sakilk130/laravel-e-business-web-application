@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20" style="width: 1280px;">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Manage Products</h2>
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="taskTableBody">
            @for($i=0; $i<count($product); $i++)
            <tr data-id="{{ $product[$i]->id }}">

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
              <th>
                <a href="{{route('admin.edit_product', $product[$i]->id)}}" class="btn btn-sm btn-info">Edit</a>
                <a href="#" data-toggle="modal" data-target="#deleteTask"  class="btn btn-sm btn-danger delete">Delete</a>
              </th>
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
            <h5 class="modal-title" id="deleteTaskTitle">Delete Product</h5>
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
