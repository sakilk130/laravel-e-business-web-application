@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Notice</h2>
        <div class="pd-20 card-box mb-30">
            @for($i=0; $i<count($notice); $i++)
            <div style="padding-bottom: 20px">
                <h5 class="card-title weight-500"><span>{{ $i+1 }} .</span>{{ $notice[$i]['notice_title'] }}</h5>
                <p class="card-text">{{ $notice[$i]['notice_details'] }}</p>
            </div>
            @endfor
        </div>
      </div>
    </div>
</div>
@endsection
