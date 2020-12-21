@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Sub-Categories</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Category</th>
              <th>Sub-Category</th>
              <th>Creation Date</th>
              <th>Update Date</th>
              <td>Action</td>
            </tr>
          </thead>

          <tbody id="taskTableBody">

            @for($i=0; $i<count($subcategory); $i++)

            <tr data-id="{{ $subcategory[$i]->id}}">

              <td class="table-plus">{{ $i+1 }}</td>
              <td> {{$subcategory[$i]->category_name  }}</td>
              <td>{{$subcategory[$i]->sub_category_name }}</td>
              <td>{{$subcategory[$i]->created_at  }}</td>
              <td>{{$subcategory[$i]->updated_at }}</td>
              <td>
                <a href="{{route('admin.edit_sub_category', $subcategory[$i]->id)}}" class="btn btn-sm btn-info">Edit</a>
                {{-- <a  href="#" class="btn btn-sm btn-danger">Delete</a> --}}
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
                <h5 class="modal-title" id="deleteTaskTitle">Delete Sub-Category</h5>
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

