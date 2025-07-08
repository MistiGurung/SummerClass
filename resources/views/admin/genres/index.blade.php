@extends('admin.master')

@section('genrecontent')
<div class="container mt-5">
    <h3 class="mb-4">Genres</h3>
    <a href="{{ route('admin.genre.create') }}" class="btn text-white" style="background-color: rgb(6, 57, 135);">
            + Create
        </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SNo</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id}}</td>
                <td>{{ $genre->name}}</td>
                <td>{{ $genre->description}}</td>
                <td>
                    <a href="{{ route('admin.genre.edit', $genre->id) }}" class="text-primary me-2" title="Edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('admin.genre.delete', $genre->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this genre?')">
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