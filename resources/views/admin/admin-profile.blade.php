@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')

    <div class="main-container">
      <div class="pd-ltr-20">
        <div class="card-box mb-30">
          <h2 class="h4 pd-20 text-blue">Profile</h2>
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
                  <img src="/images/profile-photo.jpg" alt="" height="100px" width="100px">
                </div>
              </div>

              <!-- Name -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Name</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="text"
                    value="Admin Name"
                    name="name"

                  />
                </div>

                {{-- Server side validation --}}
                @error('name')
                <span style="margin:auto; color:red">{{ $message }}</span>
                @enderror

              </div>

              <!-- Email -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Email</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="email"
                   value="Admin Mail"
                   name="email"
                  />
                </div>

                {{-- Server side validation --}}
                 @error('email')
                 <span style="margin:auto; color:red">{{ $message }}</span>
                 @enderror

              </div>

              <!-- Phone -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Phone</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="text"
                   value="Admin Phone"
                   name="phone"
                  />
                </div>

                {{-- Server side validation --}}
                 @error('phone')
                 <span style="margin:auto; color:red">{{ $message }}</span>
                 @enderror

              </div>

               <!-- Address -->
               <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Address</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="text"
                   value="Admin Address"
                   name="address"
                  />
                </div>

                {{-- Server side validation --}}
                 @error('address')
                 <span style="margin:auto; color:red">{{ $message }}</span>
                 @enderror

              </div>

               <!-- Shop -->
               <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Shop Name</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="text"
                   value="Shop Name"
                   name="store_name"
                  />
                </div>

                 {{-- Server side validation --}}
                 @error('store_name')
                 <span style="margin:auto; color:red">{{ $message }}</span>
                 @enderror

                </div>

               <!-- Image -->
               <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >image</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="file"
                    name="profile_image"
                  />
                </div>

                 {{-- Server side validation --}}
                 @error('profile_image')
                 <span style="margin:auto; color:red">{{ $message }}</span>
                 @enderror

              </div>


              <!-- Submit -->
              <div class="col-sm-12 col-md-2" style="margin: auto">
                <input
                  class="btn btn-primary"
                  type="submit"
                  name="submit"
                  value="Edit Profile"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endsection
