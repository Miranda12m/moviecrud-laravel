@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <div class="banner">{{ $message }}</div>

    <br />

    <div class="container mt-4">
      <div class="row">
        @foreach ($movies as $movie)
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
              <img
                src="{{ $movie->imageUrl }}"
                class="card-img-top"
                alt="{{ $movie->title }}"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title text-truncate">{{ $movie->title }}</h5>
                <p class="card-text text-truncate">{{ $movie->description }}</p>
                <p class="text-muted">{{ $movie->date }}</p>
                <a href="{{ route('pages.articulo', ['date' => $movie->date]) }}" class="btn btn-primary mt-auto">View Details</a>
              </div>
            </div>
          </div>
          @if ($loop->iteration % 4 == 0)
            </div><div class="row">
          @endif
        @endforeach
      </div>
      <div class="d-flex justify-content-center">
        {{ $movies->links() }}
      </div>
    </div>
@endsection

<!-- <style>
  .card-title, .card-text {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* number of lines to show */
    -webkit-box-orient: vertical;
  }
</style> -->