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
                <tbody>
            @for($i=0; $i<count($poster); $i++)
            <tr>
                <td class="table-plus">{{ $i+1 }}</td>
                <td><img style="height: 50px; weight:50px" src="/upload/{{ $poster[$i]['image'] }}" alt=""></td>
                <td>{{ $poster[$i]['created_at'] }}</td>
                <td>{{ $poster[$i]['updated_at'] }}</td>
                <td>
                    <a
                    style="color: green; font-weight:800"
                      href="{{route('admin.edit_poster', $poster[$i]['id'])}}"
                      class="micon dw dw-edit-1"
                    >
                      Edit</a
                    > |
                    <a
                    style="color: red; font-weight:800"
                      href="#"
                      class="micon dw dw-delete-3"
                    >
                      Delete</a
                    >
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
@endsection
