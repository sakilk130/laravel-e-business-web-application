@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
          <h2 class="h4 pd-20 text-blue">Edit Blog Post</h2>
          <div class="pd-20 card-box mb-30">
            <form method="POST">
                 {{-- Token --}}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <!-- image -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Image</label
                >
                <div class="col-sm-12 col-md-10">
                  <img src="/upload/{{ $blog[0]['image'] }}" alt="" height="100px" width="100px">
                </div>
              </div>
              <!-- Blog Title -->

              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Blog Title</label
                >
                <div class="col-sm-12 col-md-10">
                    <p>{{ $blog[0]['blog_title'] }}</p>
                </div>
              </div>

              <!-- Blog Drescription -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Blog Drescription</label
                >
                <div class="col-sm-12 col-md-10">
                    <p>{{ $blog[0]['blog_drescription'] }}</p>

                </div>
              </div>


              <!-- Submit -->
              <div class="col-sm-12 col-md-2" style="margin: auto">
                <label class=""
                style="margin: auto; color:red">Are You Sure ?</label
              >
                <input
                  class="btn btn-danger"
                  type="submit"
                  name="submit"
                  value="Confirm"
                />
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
