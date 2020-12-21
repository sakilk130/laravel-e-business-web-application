@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Orders</h2>
            <div class="pd-20 card-box mb-30">
                <form method="POST">
                    {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Image-->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Image</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <img style="height: 100px; weight:100px" src="/upload/{{ $order[0]->product_image }}" alt="">
                        </div>
                    </div>

                    <!-- Customer Name-->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Name</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">{{ $order[0]->name }}</p>
                        </div>
                    </div>
                    <!-- Customer Email -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Email</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">{{ $order[0]->email }}</p>

                        </div>
                    </div>
                    <!-- Contact No. -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Contact No.</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">+88{{ $order[0]->phone }}</p>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Shipping Address</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">{{ $order[0]->address }}</p>
                        </div>
                    </div>
                    <!-- Product Details -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Details</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">{{ $order[0]->product_name }} {{ $order[0]->product_description }}</p>

                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Quantity</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">{{ $order[0]->quantity }}</p>

                        </div>
                    </div>

                    <!-- Price -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Price</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">{{ $order[0]->product_price }} BDT</p>
                        </div>
                    </div>
                    <!-- Order Date -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Order Date</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">{{ $order[0]->created_at }}</p>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Status</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control" name="status" required>
                                <option value="">---Select Status---</option>
                                <option value="Pending">
                                    Pending
                                </option>
                                <option value="In Process" selected>In Process</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-2" style="margin: auto">
                        <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            id=""
                            value="Edit Orders"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
