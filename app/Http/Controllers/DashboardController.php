<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Movie;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $statistics = [
            'totalUser'=>User::count(),
            'totalGenre'=>Genre::count(),
            'totalMovie'=>Movie::count(),
            'totalMovieWatched'=>1,

        ];
        $movies= Movie::latest()->get(['id', 'name']); //select * from movies order by id desc

        return view('admin.dashboard', compact('title', 'statistics', 'movies'));
    }
    public function genre()
    {
        $title = 'Genres';
        return view('admin.genres', compact('title'));

    }
    public function movie()
    {
        $title = 'Movies';
        return view('admin.movies', compact('title'));
    }
}
