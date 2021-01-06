@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Add Product</h2>
        <div class="pd-20 card-box mb-30">
          <form method="POST" enctype="multipart/form-data">
              {{-- Token --}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Select Category -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Select Category</label
              >
              <div class="col-sm-12 col-md-10">
                <select class="custom-select form-control" name="category">
                  <option value=''>---Select Category---</option>
                  @for($i=0; $i<count($category); $i++)
                  <option value="{{ $category[$i]['id'] }}">{{ $category[$i]['category_name'] }}</option>
                  @endfor
                </select>
              </div>

              {{-- Server Side validation --}}
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
                  <option value="">---Select Sub-Category---</option>
                  @for($i=0; $i<count($subcategory); $i++)
                  <option value="{{ $subcategory[$i]['id'] }}">{{ $subcategory[$i]['sub_category_name'] }}</option>
                  @endfor
                </select>
              </div>

               {{-- Server Side validation --}}
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
                  name="product_name"
                  placeholder="Product Name..."
                  value="{{ old('product_name') }}"
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
                <input class="form-control" type="text" placeholder="Product Brand..." name="product_brand" value="{{ old('product_brand') }}"/>
              </div>

              {{-- Server Side validation --}}
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
                >{{ old('product_description') }}</textarea>
              </div>

                {{-- Server Side validation --}}
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
                  value="{{ old('shipping_charge') }}"
                />
              </div>

              {{-- Server Side validation --}}
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
                  <option value="Out Of Stock">Out Of Stock</option>
                </select>
              </div>

               {{-- Server Side validation --}}
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
                <input class="form-control" type="text" placeholder="Product Stock..." name="product_stock" value="{{ old('product_stock') }}"/>
              </div>

                 {{-- Server Side validation --}}
                 @error('product_stock')
                 <span style="margin:auto; color:red">{{ $message }}</span>
                 @enderror

                </div>

            <!-- Price -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Price</label>
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="text"
                  placeholder="Price (BDT)"
                  name="price"
                  value="{{ old('price') }}"
                />
              </div>

               {{-- Server Side validation --}}
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
                    placeholder="Discount (BDT)"
                    name="discount"
                    value="{{ old('discount') }}"
                  />
                </div>

                {{-- Server Side validation --}}
               @error('discount')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror

            </div>

            <!-- Image -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Add Image</label
              >
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="file" name="product_image" value="{{ old('product_image') }}"/>
              </div>

                {{-- Server Side validation --}}
                @error('product_image')
                <span style="margin:auto; color:red">{{ $message }}</span>
                @enderror

            </div>

            {{-- Submit --}}
            <div class="col-sm-12 col-md-2"  style="margin: auto">
              <input
                class="btn btn-primary"
                type="submit"
                name="submit"
                value="Add Product"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endsection
