<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::paginate(10);
        $message = 'Movie Catalog';
        return view('pages.index', compact('movies', 'message'));
    }

    public function articulo($date)
    {
        $movie = Movies::where('date', $date)->first();
        return view('pages.articulo', compact('movie'));
    }
}
