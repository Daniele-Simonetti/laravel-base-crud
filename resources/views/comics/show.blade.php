@extends('layouts.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>{{ $comic->title }}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img class="fluid-img" src="{{ $comic->thumb }}" alt="{{$comic->title}}">
        </div>
        <div class="col">
          <div>
            <h2>Description:</h2>
            <p>
              {{ $comic->description }}
            </p>
            <h3>Realease date: {{ $comic->sale_date }}</h3>
          </div>
          <div><h2>{{ $comic->price }}€</h2></div>
          <div>
            <ul>
              <li>Type: {{ $comic->type }}</li>
              <li>Serie: {{ $comic->series }}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a class="btn btn-primary" href="{{ route('comics.index') }}">Back to All</a>
        </div>
      </div>
    </div>
@endsection