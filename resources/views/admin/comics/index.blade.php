@extends('admin.layouts.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col text-center">

          <h1 class="h1">Admin Section</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="{{ route('comics.create') }}" class="btn btn-primary">Add a new comic</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table table-light mt-3 table-bordered border-primary">
            <thead>
              <tr class="table-primary text-center">
                <th>Title</th>
                <th>Series</th>
                <th>Type</th>
                <th>Sale_Date</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
                  <tr class="text-center table-secondary">
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }} €</td>
                    <td class="text-center table-info">
                      <a class="btn btn-info" href="{{ route('comics.show', $comic) }}">View</a>
                      <a class="btn btn-warning" href="{{ route('comics.edit', $comic) }}">Edit</a>
                    </td>
                    <td class="text-center table-info">
                      <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Delete">
                      </form>
                    </td>
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