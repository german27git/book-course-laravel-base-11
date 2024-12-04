<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',[PrimerControlador::class,'index']);
Route::get('user/{id}',[PrimerControlador::class,'user']);


