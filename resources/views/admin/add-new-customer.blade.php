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
          <form>
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
                />
              </div>
            </div>

            <!-- Customer Email -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Email</label>
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="text"
                  placeholder="test@test.com"
                />
              </div>
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
                />
              </div>
            </div>
            <!-- Shipping Address -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Shipping Address</label
              >
              <div class="col-sm-12 col-md-10">
                <textarea
                  name="product-description"
                  class="form-control"
                  cols="30"
                  rows="10"
                  placeholder="Shipping Address.."
                ></textarea>
              </div>
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
                />
              </div>
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
                />
              </div>
            </div>

            <!-- Submit -->
            <div class="col-sm-12 col-md-2" style="text-align: center">
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
