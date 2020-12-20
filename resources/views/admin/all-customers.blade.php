@extends('admin.includes.navbar', ['img'=>$admin->image_profile])
@section('title',$admin->shop_name)
@section('profileName',$admin->username)
@section('storeName',$admin->shop_name)
@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">All Customers</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact No.</th>
              <th>Shipping Address</th>
              <th>Registration Date</th>
              <th>Last Update</th>
            </tr>
          </thead>
          <tbody>

            @for($i=0; $i<count($customer); $i++)
            <tr>
              <td class="table-plus">{{ $i+1 }}</td>
              <td><img style="height: 50px; weight:50px" src="/upload/{{$customer[$i]['image']  }}" alt=""></td>
              <td>{{$customer[$i]['name']  }}</td>
              <td>{{$customer[$i]['email']  }}</td>
              <td>+880{{$customer[$i]['phone']  }}</td>
              <td>{{$customer[$i]['address']  }}</td>
              <td>{{$customer[$i]['created_at']  }}</td>
              <td>{{$customer[$i]['updated_at']  }}</td>
            </tr>
            @endfor

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
