@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Add Blog Post</h2>
        <div class="pd-20 card-box mb-30">
            <form method="POST" enctype="multipart/form-data">
                 {{-- Token --}}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <!-- Blog Title -->
                <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label">Blog Title</label>
                  <div class="col-sm-12 col-md-10">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Blog Title..."
                      name="blog_title"
                      required
                    />
                  </div>

                  {{-- Server side validation --}}
                 @error('blog_title')
                 <span style="margin:auto; color:red">{{ $message }}</span>
                 @enderror

                </div>

                <!-- Blog Drescription -->
                <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label"
                    >Blog Drescription</label
                  >
                  <div class="col-sm-12 col-md-10">
                    <textarea
                      class="form-control"
                      cols="30"
                      rows="10"
                      placeholder="Blog Drescription..."
                      name="blog_details"
                      required
                    ></textarea>
                  </div>

                        {{-- Server side validation --}}
                        @error('blog_details')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                </div>

                <!--Image -->
                <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label"
                    >Image</label
                  >
                  <div class="col-sm-12 col-md-10">
                    <input
                      class="form-control"
                      type="file"
                      name="blog_image"
                      required

                    />
                  </div>
                        {{-- Server side validation --}}
                        @error('blog_image')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                </div>

                <!-- Submit -->
                <div class="col-sm-12 col-md-2" style="margin: auto">
                  <input
                    class="btn btn-primary"
                    type="submit"
                    name="submit"
                    value="Add Blog"
                  />
                </div>
              </form>
        </div>
      </div>
    </div>
</div>

@endsection
