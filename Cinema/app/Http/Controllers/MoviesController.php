<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    // show all movies
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
    // show movie
    public function show($id)
    {
        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }
}
