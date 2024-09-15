<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/destroy/{title}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/edit/{title}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/update', [PostController::class, 'update'])->name('posts.update');
