@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Manage Customer</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact No.</th>
              <th>Shipping Address</th>
              <th>Registration Date</th>
              <th>Last Update</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="taskTableBody">

            @for($i=0; $i<count($customer); $i++)

            <tr data-id="{{ $customer[$i]['id'] }}">
              <td class="table-plus">{{ $i+1 }}</td>
              <td><img style="height: 50px; weight:50px" src="/upload/{{$customer[$i]['image']  }}" alt=""></td>
              <td>{{$customer[$i]['name']  }}</td>
              <td>{{$customer[$i]['email']  }}</td>
              <td>+880{{$customer[$i]['phone']  }}</td>
              <td>{{$customer[$i]['address']  }}</td>
              <td>{{$customer[$i]['created_at']  }}</td>
              <td>{{$customer[$i]['updated_at']  }}</td>
              <td>
                <a class="btn btn-sm btn-info" href="{{route('admin.edit_customer', $customer[$i]['id'])}}">Edit</a>
                <input type="hidden">
                {{-- <a class="btn btn-danger" href=""">Delete</a> --}}
                <a href="#" data-toggle="modal" data-target="#deleteTask"  class="btn btn-sm btn-danger delete">Delete</a>
                {{-- {{ $customer[$i]['id'] }} --}}
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
                <h5 class="modal-title" id="deleteTaskTitle">Delete Customer</h5>
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


