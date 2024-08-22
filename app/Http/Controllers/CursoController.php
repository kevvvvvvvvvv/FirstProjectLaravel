<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $curso= Curso::paginate();
        return view('curso.index',compact('curso'));
    }

    public function create(){
        return view('curso.create');
    }

    //O también se puede hacer de la sigueinte manera
    public function show($id){
        $curso = Curso::find($id);
        return view('curso.show',compact('curso'));
    }

}
