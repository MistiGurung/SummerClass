@extends('admin.master')

@section('moviecontent')

<div class="container mt-5">
    
    <h3 class="mb-4">Movies</h3>
    <a href="{{ route('admin.movie.create') }}" class="btn text-white" style="background-color: rgb(6, 57, 135);">
            + Create
        </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SNo</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Release Date</th>
                <th>Rating</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($movies as $movie)
                <tr>
                <td>{{ $movie->id}} </td>
                <td>{{ $movie->name}} </td>
                <td>{{ $movie->duration}} </td>
                <td>{{ $movie->release_date}} </td>
                <td>{{ $movie->rating}} </td>
                <td>{{ $movie->genre_id}} </td>
                <td>
                    <a href="{{ route('admin.movie.edit', $movie->id) }}" class="text-primary me-2" title="Edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('admin.movie.delete', $movie->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger p-0" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
