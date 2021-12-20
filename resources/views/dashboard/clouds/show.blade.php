@extends('dashboard.layouts.main')
@section('container')
    <h1 class="h3 mb-4 text-gray-800">Detail Data</h1>
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label font-weight-bolder">Name</label>
          <div class="col-sm-6">
            <p>{{ $cloud->name }}</p>
        </div>
    </div>
    <div class="row mb-3">
        <label for="storage" class="col-sm-2 col-form-label font-weight-bolder">Storage</label>
        <div class="col-sm-6">
            <p>{{ $cloud->storage }}</p>
          </div>
        </div>
        <div class="row mb-3">
          <label for="price" class="col-sm-2 col-form-label font-weight-bolder">Price</label>
          <div class="col-sm-6">
            <p>{{ $cloud->price }}</p>
          </div>
        </div>
        <div class="row mb-3 d-flex justify-content-end">
          <div class="col-sm-9">
            <a href="/dashboard/clouds/" class="btn btn-danger" >Back</a>
          </div>
        </div>
@endsection