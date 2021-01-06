@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

    <div class="main-container">
      <div class="pd-ltr-20">
        <div class="card-box mb-30">
          <h2 class="h4 pd-20 text-blue">Change Password</h2>
          <div class="pd-20 card-box mb-30">
            <form method="POST">
                {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <!-- Old Password -->
               {{-- Error Message --}}
             <div class="form-group row">
                <span style="margin: auto; color: green">
                    {{ session('success') }}
                </span>
             </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Old Password</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="password"
                    placeholder="Enter Old Password"
                    name="old_password"
                    value="{{ old('password') }}"
                  />
                </div>

                {{-- Server Side validation Error --}}
                @error('old_password')
                 <span style="margin: auto; color:red">{{ $message }}</span>
                @enderror

            </div>

              <!-- New Password -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >New Password</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="password"
                    placeholder="Enter New Password"
                    name="new_password"
                    value="{{ old('new_password') }}"
                  />
                </div>

                {{-- Server Side validation Error --}}
                @error('new_password')
                 <span style="margin: auto; color:red">{{ $message }}</span>
                @enderror

            </div>

              <!-- Confirm Password -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Confrim Password</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="password"
                    placeholder="Enter Confirm Password"
                    name="c_new_password"
                    value="{{ old('c_new_password') }}"
                  />
                </div>
                {{-- Server Side validation Error --}}
                @error('c_new_password')
                 <span style="margin: auto; color:red">{{ $message }}</span>
                @enderror
            </div>

             {{-- Error Message --}}
             <div class="form-group row">
                <span style="margin: auto; color: red">
                    {{ session('msg') }}
                </span>
             </div>

              <!-- Submit -->
              <div class="col-sm-12 col-md-2" style="margin: auto">
                <input
                  class="btn btn-primary"
                  type="submit"
                  name="submit"
                  value="Change Password"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endsection
