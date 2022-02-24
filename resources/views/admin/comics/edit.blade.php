@extends('admin.layouts.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Comic Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">thumb</label>
          <input type="form-control" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea type="text-area" class="form-control" id="description" name="description" rows="5" value="{{$comic->description}}">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">series</label>
          <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">type</label>
          <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">sale date</label>
          <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="{{ route('comics.index') }}">Back to All</a>
    </div>
  </div>
</div>
@endsection