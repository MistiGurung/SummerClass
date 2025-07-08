@extends('admin.master')

@section('moviecontent')
<div class="container mt-5">
    <h3>Create Movie</h3>

    <form action="{{ route('admin.movie.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Movie Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="number" step="0.01" name="duration" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" name="release_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" step="0.01" name="rating" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="genre_id">Genre</label>
            <select name="genre_id" class="form-control" required>
                <option value="" disabled selected>Select Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" name="language" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cast" class="form-label">Cast</label>
            <input type="text" name="cast" class="form-control" required>
        </div>
        <button type="submit" class="btn text-white" style="background-color: rgb(6, 57, 135);">Create</button>

    </form>
</div>

@endsection