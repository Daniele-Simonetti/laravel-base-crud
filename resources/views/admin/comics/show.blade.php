@extends('admin.layouts.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1>{{ $comic->title }}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img class="fluid-img" src="{{ $comic->thumb }}" alt="{{$comic->title}}">
        </div>
        <div class="col">
          <div class="mt-5">
            <h2 class="text-center">Description:</h2>
            <p>
              {{ $comic->description }}
            </p>
            <div class="text-center">
              <h2>{{ $comic->price }}€</h2>
            </div>
          </div>
          <div class="my-5">
            <h3>Type: {{ $comic->type }}</h3>
            <h3>Serie: {{ $comic->series }}</h3>
          </div>
          <div>
            <h3>Realease date: {{ $comic->sale_date }}</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a class="btn btn-primary mt-4" href="{{ route('comics.index') }}">Back to All</a>
        </div>
      </div>
    </div>
@endsection