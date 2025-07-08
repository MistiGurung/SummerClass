@extends('admin.master')

@section('genrecontent')

<div class="container mt-5">
    <h3 class="mb-4">Create New Genre</h3>

    <form action="{{ route('admin.genre.store') }}" method="POST">
        @csrf


        <div class="mb-3">
            <label for="name" class="form-label">Genre Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn text-white" style="background-color: rgb(6, 57, 135);">
            Create
        </button>
    </form>
</div>

@endsection