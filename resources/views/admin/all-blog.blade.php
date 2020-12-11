@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Blog Post</h2>
        <div class="pd-20 card-box mb-30">
            <div class="row clearfix">

                {{-- Blog Post-1 --}}
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card card-box">
                        <img class="card-img-top" src="/vendors/images/img2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="">
                            <h5 class="card-title weight-500">Blog title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </a>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>

                {{-- Blog Post-2 --}}
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card card-box">
                        <img class="card-img-top" src="/vendors/images/img2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="">
                                <h5 class="card-title weight-500">Blog title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </a>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection
