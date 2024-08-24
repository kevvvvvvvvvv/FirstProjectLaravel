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

    public function store(Request $request){

        $request->validate([
            'name'=>'required|min:3',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        $curso = new Curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;
        $curso->save();

        return redirect()->route('curso.show',$curso);  
    }

    //O también se puede hacer de la sigueinte manera
    public function show(Curso $curso){

        return view('curso.show',compact('curso'));
    }


    public function edit(Curso $curso){
        return view('curso.edit',compact('curso'));
    }

    public function update(Request $request,Curso $curso){
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;
        $curso->save();

        return redirect()->route('curso.show',$curso);  
    }
}
