@extends('dashboard.layouts.main')
@section('container')
    <h1 class="h3 mb-4 text-gray-800">Edit Data</h1>
    <form method="POST" action="/dashboard/categories/{{ $category->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required
                    autofocus value="{{ old('name', $category->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3 d-flex justify-content-end">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary ">Edit</button>
                <a href="/dashboard/categories/" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
@endsection
