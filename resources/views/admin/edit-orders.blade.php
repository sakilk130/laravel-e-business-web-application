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
                <form>
                    {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Customer Name-->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Name</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                name="name"
                                value="Sakil Khan"
                            />
                        </div>
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
                                value="sakilk130@gmail.com"
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
                                value="01721214996"
                            />
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Shipping Address</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                value="Dhaka, Bangladesh"
                            />
                        </div>
                    </div>
                    <!-- Product Details -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Details</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                type="text"
                                name="product-details"
                                class="form-control"
                                value="MacBook Pro 16GB 2021"
                            />
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Quantity</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" value="1" />
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Price</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                type="text"
                                class="form-control"
                                name="price"
                                value="2,20,000 BDT"
                            />
                        </div>
                    </div>
                    <!-- Order Date -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Order Date</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                value="17/11/2020"
                            />
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Status</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control">
                                <option value="">---Select Status---</option>
                                <option value="Pending" selected>
                                    Pending
                                </option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2" style="text-align: center">
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
