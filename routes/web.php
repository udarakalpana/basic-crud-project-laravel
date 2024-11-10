<?php

use App\Http\Controllers\Post\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'showHomePage']);

Route::get('/create-new-post', [PostController::class, 'showPostCreateForm'])->name('create-post-form');

Route::post('/create-post', [PostController::class, 'createPost'])->name('create');
