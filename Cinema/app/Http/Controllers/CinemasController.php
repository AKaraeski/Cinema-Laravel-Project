<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemasController extends Controller
{
    // show all cinemas
    public function index()
    {
        $cinemas = Cinema::all();

        return view('cinemas.index', compact('cinemas'));
    }
    // show movie
    public function show($id)
    {
        $cinema = Cinema::find($id);

        return view('cinemas.show', compact('cinema'));
    }
}
