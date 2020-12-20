@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Customer</h2>
            <div class="pd-20 card-box mb-30">
                <form method="POST">
                    {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Image -->
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label"
                        >Image</label
                    >
                    <div class="col-sm-12 col-md-10">
                        <table>
                            <tr>
                                <td>
                                    <img style="height: 100px; weight:100px" src="/upload/{{ $customer->image }}" alt="">

                                </td>
                                <td>
                                    <a href="{{route('admin.change_picture', $customer->id)}}">Change Picture</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                    <!-- Customer Name -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Name</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                name="name"
                                value="{{ $customer->name }}"
                            />
                        </div>

                            {{-- Server Side validation --}}
                        @error('name')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>

                    <!-- Customer Email -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Email</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="email"
                                name="email"
                                value="{{ $customer->email }}"
                            />
                        </div>

                           {{-- Server Side validation --}}
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
                                name="phone"
                                value="{{ $customer->phone }}"
                            />
                        </div>

                        {{-- Server Side validation --}}
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
                            <input
                                type="text"
                                class="form-control"
                                name="address"
                                value="{{ $customer->address }}"
                            />
                        </div>
                            {{-- Server Side validation --}}
                            @error('address')
                            <span style="margin:auto; color:red">{{ $message }}</span>
                            @enderror
                    </div>

                    <!-- Submit -->
                    <div class="col-sm-12 col-md-2" style="margin: auto">
                        <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            value="Edit Customer"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
