@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20">Add Product</h2>
        <div class="pd-20 card-box mb-30">
          <form>
            <!-- Select Category -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Select Category</label
              >
              <div class="col-sm-12 col-md-10">
                <select class="custom-select form-control">
                  <option value="">---Select Category---</option>
                  <option value="Books">Books</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Fashion">Fashion</option>
                </select>
              </div>
            </div>
            <!-- Select Sub-Category -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Select Sub-Category</label
              >
              <div class="col-sm-12 col-md-10">
                <select class="custom-select form-control">
                  <option value="">---Select Sub-Category---</option>
                  <option value="Mobile">Mobile</option>
                  <option value="Laptop">Laptop</option>
                  <option value="TV">TV</option>
                  <option value="AC">AC</option>
                </select>
              </div>
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
                  placeholder="MacBook Pro 16GB 2021.."
                />
              </div>
            </div>

            <!-- Product Brand -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Product Brand</label
              >
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Apple" />
              </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Product Description</label
              >
              <div class="col-sm-12 col-md-10">
                <textarea
                  name="product-description"
                  class="form-control"
                  cols="30"
                  rows="10"
                  placeholder="Product Description....."
                ></textarea>
              </div>
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
                  placeholder="100 BDT"
                />
              </div>
            </div>

            <!-- Product Availability -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Product Availability</label
              >
              <div class="col-sm-12 col-md-10">
                <select class="custom-select form-control">
                  <option value="In Stock">In Stock</option>
                  <option value="Out Of Stock">Out Of Stock</option>
                </select>
              </div>
            </div>
            <!-- Stock Count -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Product Stock</label
              >
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="200" />
              </div>
            </div>

            <!-- Price -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Price</label>
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="text"
                  placeholder="2,20,000 BDT"
                />
              </div>
            </div>

            <!-- Image -->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Add Image</label
              >
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="file" />
              </div>
            </div>

            <div class="col-sm-12 col-md-2" style="text-align: center">
              <input
                class="btn btn-primary"
                type="submit"
                name="submit"
                id=""
                value="Add Product"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endsection
