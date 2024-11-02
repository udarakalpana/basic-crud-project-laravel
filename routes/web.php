<?php

use App\Http\Controllers\Post\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'showPostCreateForm']);

Route::post('/create-post', function (Request $request) {
    return $request->all();
})->name('create');
