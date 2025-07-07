@extends('admin.master')

@section('moviecontent')
<div class="container mt-5">
    <h3 class="mb-4">Movies</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SNo</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Release Date</th>
                <th>Rating</th>
                <th>Genre</th>
            </tr>
        </thead>
    </table>
</div>

@endsection
