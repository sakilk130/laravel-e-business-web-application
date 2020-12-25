@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Blog Post</h2>
        <div class="pd-20 card-box mb-30">
            <div class="row clearfix">

                <!-- Blog Post -->

                @for($i=0; $i<count($blog); $i++)

                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card card-box">
                        <img style="height: 170px; weight:100px" class="card-img-top" src="/upload/{{ $blog[$i]['image'] }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 style="text-align: justify; text-justify: inter-word;" class="card-title weight-500">{{ $blog[$i]['blog_title'] }}</h5>
                            <p style="text-align: justify; text-justify: inter-word;" class="card-text">{{ str_limit($blog[$i]['blog_drescription'], $limit = 50, $end="...") }} <a style="color: green" href="{{route('admin.read_blog', $blog[$i]['id'])}}">See More</a>  </p>
                            <a href="{{route('admin.edit_blog', $blog[$i]['id'])}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
      </div>
    </div>
@endsection
