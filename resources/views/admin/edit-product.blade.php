@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Product</h2>
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
                            <table>
                                <tr>
                                    <td>
                                        <img style="height: 100px; weight:100px" src="/upload/{{ $product[0]->product_image}}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('admin.change_product_picture', $product[0]->id)}}">Change Picture</a>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>

                    <!-- Select Category -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Select Category</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control" name="category">
                                <option value="">---Select Category---</option>
                                @for($i=0; $i<count($category); $i++)
                                <option value="{{ $category[$i]['id'] }}">{{ $category[$i]['category_name'] }}</option>
                                @endfor
                            </select>
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('category')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                         @enderror

                    </div>
                    <!-- Select Sub-Category -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Select Sub-Category</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control" name="sub_category">
                                <option value="">
                                    ---Select Sub-Category---
                                </option>
                                @for($i=0; $i<count($subcategory); $i++)
                                <option value="{{ $subcategory[$i]['id'] }}">{{ $subcategory[$i]['sub_category_name'] }}</option>
                                @endfor
                            </select>
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('sub_category')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>
                    <!-- Product Name -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Name</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Product Name.."
                                name="product_name"
                                value="{{ $product[0]->product_name }}"
                            />
                        </div>

                        {{-- Server Side validation --}}
                        @error('product_name')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Product Brand -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Brand</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Product Brand..."
                                name="product_brand"
                                value="{{ $product[0]->product_brand }}"
                            />
                        </div>

                         {{-- Server Side validation Error --}}
                        @error('product_brand')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>
                    <!-- Description -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Description</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <textarea
                                class="form-control"
                                cols="30"
                                rows="10"
                                placeholder="Product Description....."
                                name="product_description"
                            >{{ $product[0]->product_description }}</textarea>
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('product_description')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>

                    <!-- Shipping Charge -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Shipping Charge</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Shipping Charge (BDT)"
                                name="shipping_charge"
                                value="{{ $product[0]->shipping_cost }}"
                            />
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('shipping_charge')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>

                    <!-- Product Availability -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Availability</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select form-control" name="product_availability">
                                <option value="In Stock">In Stock</option>
                                <option value="Out Of Stock">
                                    Out Of Stock
                                </option>
                            </select>
                        </div>

                         {{-- Server Side validation Error--}}
                        @error('product_availability')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>
                    <!-- Stock Count -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Product Stock</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Product Stock"
                                name="product_stock"
                                value="{{ $product[0]->in_stock }}"
                            />
                        </div>

                        {{-- Server Side validation Error--}}
                          @error('product_stock')
                          <span style="margin:auto; color:red">{{ $message }}</span>
                          @enderror

                        </div>

                    <!-- Price -->
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"
                            >Price</label
                        >
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Price (BDT)"
                                name="price"
                                value="{{ $product[0]->product_price }}"
                            />
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('price')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>

                    {{-- Discount --}}
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Discount</label>
                        <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            placeholder="Optional"
                            name="discount"
                            value="{{ $product[0]->product_discount }}"
                        />
                        </div>

                        {{-- Server Side validation Error--}}
                        @error('discount')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="col-sm-12 col-md-2" style="margin: auto">
                        <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            id=""
                            value="Edit Product"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
