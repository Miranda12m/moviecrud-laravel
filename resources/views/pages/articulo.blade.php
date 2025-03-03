@extends('layouts.main')

@section('title', 'Artículo')

@section('content')
<div class="container mt-5">
        <div class="row">
            <!-- Imagen de la película -->
            <div class="col-md-5">
                <img src="{{$movie->imageUrl}}" class="img-fluid rounded shadow" alt="Póster de la película">
            </div>

            <!-- Información de la película -->
            <div class="col-md-7">
                <h2 class="fw-bold">{{ $movie->title }}</h2>
                <p class="text-muted">Fecha de estreno: <strong>{{ $movie->date }}</strong></p>
                
                <p class="lead">{{ $movie->description }}</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent text-white"><strong>Género:</strong> x</li>
                    <li class="list-group-item bg-transparent text-white"><strong>Director:</strong> x</li>
                    <li class="list-group-item bg-transparent text-white"><strong>Duración:</strong> x</li>
                    <li class="list-group-item bg-transparent text-white"><strong>Calificación:</strong> ⭐⭐⭐⭐☆ (4.5/5)</li>
                </ul>

                <div class="mt-4">
                    <button class="btn btn-warning btn-lg">Ver Ahora</button>
                    <button class="btn btn-outline-light btn-lg">Añadir a Favoritos</button>
                </div>
            </div>
        </div>
</div>
@endsection