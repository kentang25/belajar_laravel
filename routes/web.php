<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'detail'])->name('detail');
Route::get('/authors/{user:name}', [PostController::class, 'authors'])->name('posts');
