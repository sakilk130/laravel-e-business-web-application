@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Upload Image</h2>
            <div class="pd-20 card-box mb-30">
                <form method="POST" enctype="multipart/form-data">
                    {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!-- Image-->
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="file"
                                name="poster_image"

                            />
                        </div>
                            {{-- Server side validation --}}
                            @error('poster_image')
                            <span style="margin:auto; color:red">{{ $message }}</span>
                            @enderror

                    </div>

                    {{-- Submit --}}
                    <div class="col-sm-12 col-md-2" style="margin: auto">
                        <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            id=""
                            value="Upload"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
