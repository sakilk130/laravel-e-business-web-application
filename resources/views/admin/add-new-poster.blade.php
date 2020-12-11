@extends('admin.includes.navbar')
@section('title',"Shop Name")
@section('profileName',"Profile Name")
@section('storeName',"Store Name")
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
      <div class="card-box mb-30">
        <h2 class="h4 pd-20 text-blue">Add New Poster</h2>
        <div class="pd-20 card-box mb-30">
          <form>
            <!-- Image -->
            <div class="form-group row">
              <div class="col-sm-12 col-md-10">
                <input
                  class="form-control"
                  type="file"
                />
              </div>
            </div>
            <!-- Submit -->
            <div class="col-sm-12 col-md-2" style="text-align: center">
              <input
                class="btn btn-primary"
                type="submit"
                name="submit"
                value="Add Poster"
              />
            </div>
          </form>
          <div>
            <h2 class="h4 pd-20 text-blue">All Poster</h2>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Image</th>
                    <th>Creation Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-plus">1</td>
                    <td>Image</td>
                    <td>17/11/2020</td>
                    <td></td>
                    <td>
                        <a
                        style="color: green; font-weight:800"
                          href="#"
                          class="micon dw dw-edit-1"
                        >
                          Edit</a
                        > |
                        <a
                        style="color: red; font-weight:800"
                          href="#"
                          class="micon dw dw-delete-3"
                        >
                          Delete</a
                        >
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
