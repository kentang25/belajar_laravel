<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'detail'])->name('detail');
Route::get('/authors/{user:name}', [PostController::class, 'authors'])->name('posts');
Route::get('/category/{category:slug}', [PostController::class, 'categories'])->name('category');

// admin 

Route::get('/admin/post/', [AdminController::class, 'index']);

Route::get('/admin/create', [AdminController::class, 'inputForm']);
Route::post('/admin/insert', [AdminController::class, 'insertData']);
Route::get('/admin/edit/{post}', [AdminController::class, 'edit']);
Route::put('/admin/update/{post}', [AdminController::class, 'update']);
Route::delete('/admin/delete/{post}', [AdminController::class, 'delete']);
