@extends('layaouts.plantilla')
@section('title','Show page')

@section('body')
    <h1>{{$curso->name}}</h1>
    <a href="{{route('curso.index')}}">Regresar</a>
    <br>
    <a href="{{route('curso.edit',$curso)}}">Editar curso</a>
    <p><strong>{{$curso->categoria}}</strong>
        {{$curso->descripcion}}</p>

@endsection