@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Add New Poster</h2>
        <div class="pd-20 card-box mb-30">
          <form method="POST" enctype="multipart/form-data">
              {{-- Token --}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Image -->
            <div class="form-group row">
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="file"
                  name="poster_image"
                />
              </div>

              {{-- Server Side validation --}}
              @error('poster_image')
              <span style="margin:auto; color:red">{{ $message }}</span>
              @enderror

            </div>
            <!-- Submit -->
            <div class="col-sm-12 col-md-2" style="margin: auto">
              <input
                class="btn btn-primary"
                type="submit"
                name="submit"
                value="Add Poster"
              />
            </div>
          </form>

          <div>
            <h2 class="h4 pd-20 text-blue">All Poster</h2>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Image</th>
                    <th>Creation Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="taskTableBody">
            @for($i=0; $i<count($poster); $i++)
            <tr data-id="{{ $poster[$i]['id'] }}">
                <td class="table-plus">{{ $i+1 }}</td>
                <td><img style="height: 50px; weight:50px" src="/upload/{{ $poster[$i]['image'] }}" alt=""></td>
                <td>{{ $poster[$i]['created_at'] }}</td>
                <td>{{ $poster[$i]['updated_at'] }}</td>
                <td>
                    <a href="{{route('admin.edit_poster', $poster[$i]['id'])}}" class="btn btn-sm btn-info">Edit</a>
                    {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                    <a href="#" data-toggle="modal" data-target="#deleteTask"  class="btn btn-sm btn-danger delete">Delete</a>

                </td>
              </tr>
            @endfor

                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Delete Modal -->
 <div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="deleteTaskTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <form id="deleteTaskForm">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteTaskTitle">Delete Poster</h5>
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
