<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

//Generando una ruta usando un controlador distinto

Route::get('/',HomeController::class);

/*Si quisieramos agrupar para utilizar el mismo controlador 
podemos hacelo de la siguiente manera*/ 

Route::controller(CursoController::class)->group(function(){
    Route::get('curso','index');
    Route::get('curso/{curso}','create');
    Route::get('curso/{id}/{id2}','show'); 
});


/*
Route::get('curso',[CursoController::class,'index']);
//Generar una ruta con una variable
Route::get('curso/{curso}',[CursoController::class,'create']);
// Generar una ruta con dos variables
Route::get('curso/{id}/{id2}',[CursoController::class,'show']); 
*/
