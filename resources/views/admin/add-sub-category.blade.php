@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Add Sub-Category</h2>
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
                <select class="custom-select form-control" name="category_name" required>
                  <option value="">---Select Category---</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Book">Book</option>
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
                  placeholder="Sub-Category Name.."
                  name="sub_category"
                  required
                  value="{{ old('sub_category') }}"
                />
              </div>
               {{-- Server Side validation Error--}}
               @error('sub_category')
               <span style="margin:auto; color:red">{{ $message }}</span>
               @enderror
            </div>

            {{-- submit --}}
            <div class="col-sm-12 col-md-2" style="margin: auto">
              <input
                class="btn btn-primary"
                type="submit"
                name="submit"
                value="Add Sub-Category"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
