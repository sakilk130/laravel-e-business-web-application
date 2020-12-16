@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Add New Customer</h2>
        <div class="pd-20 card-box mb-30">
          <form method="POST">
              {{-- Token --}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Customer Name -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Name</label>
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="text"
                  placeholder="Enter Name"
                  name="name"
                  required
                  value="{{ old('name') }}"
                />
              </div>

               {{-- Server Side validation Error--}}
               @error('name')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror

            </div>

            <!-- Customer Email -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Email</label>
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="email"
                  placeholder="test@test.com"
                  name="email"
                  required
                  value="{{ old('email') }}"
                />
              </div>

               {{-- Server Side validation Error--}}
               @error('email')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror

            </div>

            <!-- Contact No. -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Contact No.</label
              >
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="text"
                  placeholder="+8801..."
                  name="phone"
                  required
                  value="{{ old('phone') }}"
                />
              </div>

               {{-- Server Side validation Error--}}
               @error('phone')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror

            </div>
            <!-- Shipping Address -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Shipping Address</label
              >
              <div class="col-sm-12 col-md-10">
                <textarea
                  class="form-control"
                  cols="30"
                  rows="10"
                  placeholder="Shipping Address.."
                  name="address"
                  required
                >{{ old('address') }}</textarea>
              </div>

               {{-- Server Side validation Error--}}
               @error('address')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror

            </div>
            <!-- Password -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Password</label
              >
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="password"
                  placeholder="Enter Password"
                  name="password"
                  required
                  value="{{ old('password') }}"
                />
              </div>

               {{-- Server Side validation Error--}}
               @error('password')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror

            </div>

            <!--Confirm Password -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Confirm Password</label
              >
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="password"
                  placeholder="Enter Password"
                  name="c_password"
                  required
                  value="{{ old('c_password') }}"
                />
              </div>
               {{-- Server Side validation Error--}}
               @error('c_password')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror
            </div>

            <!-- Submit -->
            <div class="col-sm-12 col-md-2" style="margin: auto">
              <input
                class="btn btn-primary"
                type="submit"
                name="submit"
                value="Add Customer"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
