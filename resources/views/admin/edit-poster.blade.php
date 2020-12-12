@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <h2 class="h4 pd-20 text-blue">Edit Poster Image</h2>
            <div class="pd-20 card-box mb-30">
                <form>

                    <!-- Image-->
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-10">
                            <input
                                class="form-control"
                                type="file"
                                name="image"

                            />
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="col-sm-12 col-md-2" style="text-align: center">
                        <input
                            class="btn btn-primary"
                            type="submit"
                            name="submit"
                            id=""
                            value="Edit Poster"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
