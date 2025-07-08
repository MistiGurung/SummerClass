<?php

namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Controller;
use App\Models\Genre;

use Illuminate\Http\Request;


class GenresController extends Controller
{
    public function index()
    {
        $title = 'Genres';
        $genres= genre::all();
        return view('admin.genres.index', compact('title', 'genres'));
    }
    public function delete($genreId)
    {
        Genre::where('id', $genreId)->delete();
        toastr()->success('Data has been deleted successfully');
        return redirect()->route('admin.genre.index');
    }
    public function create()
    {
        $title = 'Create Genres';
        return view('admin.genres.create', compact('title'));
    }
}
