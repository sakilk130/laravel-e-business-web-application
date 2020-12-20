@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

    <div class="main-container">
      <div class="pd-ltr-20">
        <div class="card-box mb-30">
          <h2 class="h4 pd-20 text-blue">Profile</h2>
          <div class="pd-20 card-box mb-30">
            <form method="POST" enctype="multipart/form-data">
                {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <!-- image -->
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Image</label
                >
                <div class="col-sm-12 col-md-10">
                    <table>
                        <tr>
                            <td>

                                @if($admin->image_profile)
                                <img src="/upload/{{ $admin->image_profile }}" alt="" height="150px" width="150px" style="border-radius: 100px">
                                @else
                                <P>Image not found</P>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.update_picture') }}">Upload Ptofile Picture</a>
                                {{-- <input
                                    class="form-control"
                                    type="file"
                                    name="profile_image"
                                    value="{{ $admin->image_profile }}"
                                    /> --}}
                            </td>

                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                {{-- Server side validation --}}
                                @error('profile_image')
                                <span style="margin:auto; color:red">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                    </table>

                </div>

              </div>


              {{-- Shop_logo --}}
              <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"
                  >Shop Logo</label
                >
                <div class="col-sm-12 col-md-10">
                    <table>
                        <tr>
                            <td>
                                @if($admin->shop_logo)
                                <img src="/upload/{{ $admin->shop_logo }}" alt="" height="150px" width="150px" style="border-radius: 100px">
                                @else
                                <P>logo not found</P>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.update_logo') }}">Upload Shop Logo</a>

                                {{-- <input
                                class="form-control"
                                type="file"
                                name="shop_logo"
                                value="{{ $admin->shop_logo }}"
                              /> --}}
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                 {{-- Server side validation --}}
                     @error('shop_logo')
                     <span style="margin:auto; color:red">{{ $message }}</span>
                     @enderror
                            </td>
                        </tr>
                    </table>


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
                    value="{{ $admin->username }}"
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
                    value="{{ $admin->email }}"
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
                    value="{{ $admin->phone }}"
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
                    value="{{ $admin->address }}"
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
                    value="{{ $admin->shop_name }}"
                   name="store_name"
                  />
                </div>

                 {{-- Server side validation --}}
                 @error('store_name')
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
