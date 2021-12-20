@extends('dashboard.layouts.main')
@section('container')
<h1 class="h3 mb-4 text-gray-800">Edit Data</h1>
<form method="POST" action="/dashboard/clouds/{{ $cloud->id }}" class="mb-5">
            @method('put')
            @csrf
    <form action="/dashboard/clouds" method="POST">
        @csrf
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required
            autofocus value="{{ old('name',$cloud->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="storage" class="col-sm-2 col-form-label">Storage</label>
          <div class="col-sm-6">
            <input type="text" class="form-control @error('storage') is-invalid @enderror" id="storage" name="storage" required
            autofocus value="{{ old('storage',$cloud->storage) }}">
            @error('storage')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="price" class="col-sm-2 col-form-label">Price</label>
          <div class="col-sm-6">
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required
            autofocus value="{{ old('price',$cloud->price) }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3 d-flex justify-content-end">
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary ">Edit</button>
            <a href="/dashboard/clouds/" class="btn btn-danger" >Back</a>
          </div>
        </div>
      </form>
@endsection