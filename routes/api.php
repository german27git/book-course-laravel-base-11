<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Models\Category;
use App\Models\Post;

// Rutas de la API
Route::get('category/all', [CategoryController::class, 'all']);
Route::get('category/slug/{category:slug}', [CategoryController::class, 'slug']);
Route::apiResource('category', CategoryController::class)->except(['create','edit']);

Route::get('post/all', [PostController::class, 'all']);
Route::get('post/slug/{slug}', [PostController::class, 'slug']);
Route::apiResource('post', PostController::class)->except(['create', 'edit']);
