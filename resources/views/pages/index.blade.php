@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <div class="banner">{{ $message }}</div>

    <br />

    <div class="container mt-4">
      <div class="row">
        @foreach ($movies as $movie)
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
              <img
                src="{{ $movie->imageUrl }}"
                class="card-img-top"
                alt="{{ $movie->title }}"
              />
              <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->description }}</p>
                <p class="text-muted">{{ $movie->date }}</p>
                <a href="{{ route('pages.articulo', ['date' => $movie->date]) }}" class="btn btn-primary">View Details</a>
              </div>
            </div>
          </div>
          @if ($loop->iteration % 4 == 0)
            </div><div class="row">
          @endif
        @endforeach
      </div>
    </div>
@endsection
