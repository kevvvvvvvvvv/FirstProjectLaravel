<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('curso.index');
    }

    public function create($curso){
        return view('curso.create',['curso'=>$curso]);
    }

    //O también se puede hacer de la sigueinte manera
    public function show($v1,$v2){
        return view('curso.show',compact('v1','v2'));
    }

}
