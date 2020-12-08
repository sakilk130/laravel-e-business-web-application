@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20">All Products</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Image</th>
              <th>Name</th>
              <th>Category</th>
              <th>Sub-Category</th>
              <th>Brand</th>
              <th>In Stock</th>
              <th>Price</th>
              <th>Creation Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-plus">1</td>
              <td>Image</td>
              <td>MacBook Pro</td>
              <td>Electronics</td>
              <td>Laptop</td>
              <td>Apple</td>
              <td>100</td>
              <td>20,000 BDT</td>
              <td>17/11/2020</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection
