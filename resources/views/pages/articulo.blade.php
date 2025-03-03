@extends('layouts.main')

@section('title', 'Artículo')

@section('content')
<div class="container mt-5">
        <div class="row">
            <!-- Imagen de la película -->
            <div class="col-md-5">
                <img src="https://source.unsplash.com/600x800/?movie-poster" class="img-fluid rounded shadow" alt="Póster de la película">
            </div>

            <!-- Información de la película -->
            <div class="col-md-7">
                <h2 class="fw-bold">Título de la Película</h2>
                <p class="text-muted">Fecha de estreno: <strong>2025-03-15</strong></p>
                
                <p class="lead">Una emocionante historia llena de aventuras, drama y momentos inolvidables. Perfecta para los amantes del cine.</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent text-white"><strong>Género:</strong> Acción, Aventura</li>
                    <li class="list-group-item bg-transparent text-white"><strong>Director:</strong> John Doe</li>
                    <li class="list-group-item bg-transparent text-white"><strong>Duración:</strong> 2h 15min</li>
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