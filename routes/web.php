<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

//Generando una ruta usando un controlador distinto

Route::get('/',HomeController::class);

Route::get('curso',[CursoController::class,'index']);

//Generar una ruta con una variable
Route::get('curso/{curso}',[CursoController::class,'create']);


// Generar una ruta con dos variables
Route::get('users/{id}/{id2}', function ($id,$id2) {
    
});