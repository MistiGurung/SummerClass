@extends('admin.master')

@section('dashcontent')

<div class="container mt-5">

    <p class="text-center text-muted">Welcome to your admin dashboard. You can manage everything from here.</p> 
    <hr>
    <h2 class="text-center mb-4">Dashboard</h2>
    
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <div class="card text-white" style="background-color:rgb(3, 25, 58);"> 
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="display-6">{{ $statistics['totalUser']}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white" style="background-color:rgb(5, 39, 90);"> 
                <div class="card-body">
                    <h5 class="card-title">Movies</h5>
                    <p class="display-6">{{ $statistics['totalMovie'] }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white" style="background-color:rgb(6, 57, 135);"> 
                <div class="card-body">
                    <h5 class="card-title">Genres</h5>
                    <p class="display-6">{{ $statistics['totalGenre'] }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white" style="background-color:rgb(5, 64, 153);"> 
                <div class="card-body">
                    <h5 class="card-title">Total Movie Watched</h5>
                    <p class="display-6">{{ $statistics['totalMovieWatched'] }}</p>
                </div>
            </div>
        </div>
    </div>   
    </div>

    <div class="card">
    <div class="card-header">Recent Movies</div>
    <div class="card-body">
        <ul>
            @foreach ($movies as $movie)
            <li>{{ $movie->name}}</li>
            @endforeach
        </ul>
    </div>
    </div>

@endsection
