@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Category</h2>
            <div class="pd-20 card-box mb-30">
                <form method="POST">
                    {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!-- Category Name-->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Category Name</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                name="category_name"
                                value="{{ $category->category_name }}"
                            />
                        </div>
                           {{-- Server Side validation Error--}}
                            @error('category_name')
                            <span style="margin:auto; color:red">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Drescription</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <textarea  class="form-control" name="category_details" id="" cols="30" rows="10">{{ $category->category_description }}</textarea>
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('category_details')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>

                    {{-- Submit --}}
                    <div class="col-sm-12 col-md-2" style="margin: auto">
                        <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            value="Edit Category"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
