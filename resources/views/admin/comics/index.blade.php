@extends('admin.layouts.base')

@section('content')
    <div class="container">
      <div class="row">
        <h1 class="h1">Admin Section</h1>
      </div>
      <div class="row">
        <div class="col">
          <a href="{{ route('comics.create') }}" class="btn btn-primary">Add a new comic</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table table-primary">
            <thead>
              <tr class="table-primary">
                <th>Title</th>
                <th>Series</th>
                <th>Type</th>
                <th>Sale_Date</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
                  <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }} €</td>
                    <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a></td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col">
          {{$comics->links()}}
        </div>
      </div>
    </div>
@endsection