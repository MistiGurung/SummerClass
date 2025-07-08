<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\GenresController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

Route::get('/admin/genre', [GenresController::class, 'index'])->name('admin.genre.index');
Route::get('/admin/genre/edit', [GenresController::class, 'edit'])->name('admin.genre.edit');
Route::get('/admin/genre/create', [GenresController::class, 'create'])->name('admin.genre.create');
Route::post('/admin/genre/store', [MoviesController::class, 'store'])->name('admin.genre.store');
Route::delete('/admin/genre/{genreId}', [GenresController::class, 'delete'])->name('admin.genre.delete');


Route::get('/admin/movie', [MoviesController::class, 'index'])->name('admin.movie.index');
Route::get('/admin/movie/edit', [MoviesController::class, 'edit'])->name('admin.movie.edit');
Route::get('/admin/movie/create', [MoviesController::class, 'create'])->name('admin.movie.create');
Route::post('/admin/movie/store', [MoviesController::class, 'store'])->name('admin.movie.store');
Route::delete('/admin/movie/{movieId}', [MoviesController::class, 'delete'])->name('admin.movie.delete');