<?php

namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;


use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $title = 'Movies';
        $movies= Movie::latest()->get();
        return view('admin.movies.index', compact('movies', 'title'));
    }
    public function delete($movieId)
    {
        Movie::where('id', $movieId)->delete();
        toastr()->success('Data has been deleted successfully');
        return redirect()->route('admin.movie.index');
    }
    public function create()
    {
        $title = 'Create Movies';
        $genres = genre::all(); // fetch all genres
        return view('admin.movies.create', compact('title', 'genres'));
    }
}
