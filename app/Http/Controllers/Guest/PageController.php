<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // collezione movies dal db
        $movies = Movie::all();
        // passo i movies alla view movies
        return view("movies", compact("movies"));
    }
}
