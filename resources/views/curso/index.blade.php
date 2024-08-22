@extends('layaouts.plantilla')
@section('title','Index page')

@section('body')
    <h1>Principal</h1>
    <a href="{{route('curso.create')}}">Crear curso</a>
    <ul>
        @foreach ($curso as $cursos)
            <li>
                <a href="{{route('curso.show',$cursos)}}">{{$cursos->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$curso->links()}}
@endsection