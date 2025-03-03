@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <div class="banner">Welcome to the Movie Catalog</div>

    <br />

    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img
              src="https://images.pexels.com/photos/904620/pexels-photo-904620.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="card-img-top"
              alt="Movie 1"
            />
            <div class="card-body">
              <h5 class="card-title">Movie 1</h5>
              <p class="card-text">A thrilling adventure of a lifetime.</p>
              <p class="text-muted">2025-02-27</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img
              src="https://source.unsplash.com/400x300/?cinema"
              class="card-img-top"
              alt="Movie 2"
            />
            <div class="card-body">
              <h5 class="card-title">Movie 2</h5>
              <p class="card-text">
                A heartwarming tale of love and friendship.
              </p>
              <p class="text-muted">2025-02-20</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img
              src="https://source.unsplash.com/400x300/?poster"
              class="card-img-top"
              alt="Movie 3"
            />
            <div class="card-body">
              <h5 class="card-title">Movie 3</h5>
              <p class="card-text">An epic journey through space and time.</p>
              <p class="text-muted">2025-01-15</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img
              src="https://source.unsplash.com/400x300/?hollywood"
              class="card-img-top"
              alt="Movie 4"
            />
            <div class="card-body">
              <h5 class="card-title">Movie 4</h5>
              <p class="card-text">
                A gripping drama that will keep you on the edge of your seat.
              </p>
              <p class="text-muted">2025-03-01</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img
              src="https://source.unsplash.com/400x300/?hollywood"
              class="card-img-top"
              alt="Movie 5"
            />
            <div class="card-body">
              <h5 class="card-title">Movie 5</h5>
              <p class="card-text">
                A hilarious comedy that will have you laughing out loud.
              </p>
              <p class="text-muted">2025-03-05</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img
              src="https://source.unsplash.com/400x300/?hollywood"
              class="card-img-top"
              alt="Movie 6"
            />
            <div class="card-body">
              <h5 class="card-title">Movie 6</h5>
              <p class="card-text">
                A suspenseful thriller that will keep you guessing.
              </p>
              <p class="text-muted">2025-03-10</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
