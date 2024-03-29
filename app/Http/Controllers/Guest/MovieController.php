<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\Movie;
class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }
    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();

        return view('subpages.movie', compact('movie'));
    }
}
