@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Orders</h2>
            <div class="pd-20 card-box mb-30">
                <form method="POST">
                    {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!-- Customer Name-->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Name</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">Sakil Khan</p>
                        </div>
                    </div>
                    <!-- Customer Email -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Email</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">sakilk130@gmail.com</p>

                        </div>
                    </div>
                    <!-- Contact No. -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Contact No.</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">01721214996</p>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Shipping Address</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <!-- Product Details -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Details</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">MacBook Pro 16GB 2021</p>

                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Quantity</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">1</p>

                        </div>
                    </div>

                    <!-- Price -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Price</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">2000000 BDT</p>
                        </div>
                    </div>
                    <!-- Order Date -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Order Date</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <p class="form-control">16/12/2020</p>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Status</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control" name="status">
                                <option value="">---Select Status---</option>
                                <option value="Pending" selected>
                                    Pending
                                </option>
                                <option value="In Process">In Process</option>
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
