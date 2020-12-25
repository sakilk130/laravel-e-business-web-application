@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
          <h2 class="h4 pd-20 text-blue">Blog Post</h2>
          <div class="pd-20 card-box mb-30">
            <form method="POST" enctype="multipart/form-data">
                 {{-- Token --}}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <!-- Blog Title -->
                 <div class="form-group row" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <div class="col-sm-12 col-md-10">
                     <h1>{{ $blog[0]['blog_title'] }}</h1>
                    </div>
                  </div>

                 <!-- image -->
              <div class="form-group row">

                <div class="col-sm-12 col-md-10">
                  <img src="/upload/{{ $blog[0]['image'] }}" height="500px" width="500px" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                </div>
              </div>

              <!-- Blog Drescription -->
              <div class="form-group row" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                <div class="col-sm-12 col-md-10">
                   <p>{{ $blog[0]['blog_drescription'] }}</p>

                </div>

              </div>

            </form>
          </div>
        </div>
    </div>
</div>
@endsection
