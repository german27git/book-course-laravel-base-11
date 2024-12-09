<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function() {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});




