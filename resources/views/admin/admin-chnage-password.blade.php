@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')

    <div class="main-container">
      <div class="pd-ltr-20">
        <div class="card-box mb-30">
          <h2 class="h4 pd-20 text-blue">Change Password</h2>
          <div class="pd-20 card-box mb-30">
            <form>
                {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <!-- Old Password -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Old Password</label
                >
                <div class="col-sm-12 col-md-10">
                  <input
                    class="form-control"
                    type="password"
                    placeholder="Enter Old Password"
                  />
                </div>
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
                  />
                </div>
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
                  />
                </div>
              </div>

              <!-- Submit -->
              <div class="col-sm-12 col-md-2" style="text-align: center">
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
