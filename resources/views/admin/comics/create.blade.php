@extends('admin.layouts.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col mt-5 text-center">
          <h1>Add a new Comic</h1>
        </div>
      </div>
      <div class="row">
        <div class="col mt-5">
          <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label for="title" class="form-label">Comic Title</label>
              <input type="text" class="form-control" id="title" name="title">

              @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="thmb" class="form-label">Thumb</label>
              <input type="form-control" class="form-control" id="thumb" name="thumb">

              @error('thumb')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>

                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price">

              @error('price')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control" id="series" name="series">

              @error('series')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" id="type" name="type">

              @error('type')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale Date</label>
              <input type="date" class="form-control" id="sale_date" name="sale_date">

              @error('sale_date')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Back to All</a>
          </form>
        </div>
      </div>
    </div>
@endsection
