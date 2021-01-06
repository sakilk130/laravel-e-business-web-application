@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Sub-Category</h2>
            <div class="pd-20 card-box mb-30">
                <form method="POST">
                    {{-- Token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!-- Category Name-->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Select Category</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control" name="category_name">
                                <option value="">---Select Category---</option>
                                @for($i=0; $i<count($category); $i++)
                                <option value="{{ $category[$i]['id'] }}">
                                    {{ $category[$i]['category_name'] }}
                                </option>
                               @endfor
                            </select>
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('category_name')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Sub-Category Name</label
                        >

                        <div class="col-sm-12 col-md-10">
                            <input
                                type="text"
                                class="form-control"
                                name="sub_category"
                               value="{{ $subcategory->sub_category_name }}"
                            />
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('sub_category')
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
                            value="Edit Sub-Category"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
