<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Principal";
    }

    public function create($curso){
        return "Estas en el curso de ".$curso;
    }

    public function show(){
        return "Esto es un show";
    }
}
