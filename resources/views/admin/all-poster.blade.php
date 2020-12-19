@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Shop Poster</h2>
        <div class="pd-20 card-box mb-30">


            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/upload/{{ $poster[0]['image'] }}" alt="First slide">
                  </div>

                 @for($i=0; $i<count($poster); $i++)
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/upload/{{ $poster[$i]['image'] }}" alt="Second slide">
                  </div>
                  @endfor

                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


          </div>
        </div>
      </div>
</div>
@endsection
