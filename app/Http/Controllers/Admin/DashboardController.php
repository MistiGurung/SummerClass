<?php

namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Controller;
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

        return view('admin.dashboard.index', compact('title', 'statistics', 'movies'));
    }
    
    
}
