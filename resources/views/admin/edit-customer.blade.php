@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Customer</h2>
            <div class="pd-20 card-box mb-30">
                <form>
                    <!-- Customer Name -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Name</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
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
                                type="text"
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
                                type="text"
                                name="product-description"
                                class="form-control"
                                value="Dhaka, Bangladesh"
                            />
                        </div>
                    </div>
                    <!-- Submit -->
                    <div class="col-sm-12 col-md-2" style="text-align: center">
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
