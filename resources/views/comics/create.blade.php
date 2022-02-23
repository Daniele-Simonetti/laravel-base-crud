@extends('layouts.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label for="title" class="form-label">Comic Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
              <label for="thmb" class="form-label">thumb</label>
              <input type="form-control" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">price</label>
              <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
              <label for="series" class="form-label">series</label>
              <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">type</label>
              <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label">sale date</label>
              <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
@endsection
