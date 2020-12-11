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
            <form>
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
                  />
                </div>
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
                  />
                </div>
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
                  />
                </div>
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
                  />
                </div>
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
                  />
                </div>
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
                  />
                </div>
              </div>


              <!-- Submit -->
              <div class="col-sm-12 col-md-2" style="text-align: center">
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
