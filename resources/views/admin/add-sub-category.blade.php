@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20">Add Sub-Category</h2>
        <div class="pd-20 card-box mb-30">
          <form>
            <!-- Category Name-->
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Select Category</label
              >
              <div class="col-sm-12 col-md-10">
                <select class="custom-select form-control">
                  <option value="">---Select Category---</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Book">Book</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label"
                >Sub-Category Name</label
              >

              <div class="col-sm-12 col-md-10">
                <input
                  type="text"
                  name="product-details"
                  class="form-control"
                  placeholder="Sub-Category Name.."
                />
              </div>
            </div>

            <div class="col-sm-12 col-md-2" style="text-align: center">
              <input
                class="btn btn-primary"
                type="submit"
                name="submit"
                id=""
                value="Add Sub-Category"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection