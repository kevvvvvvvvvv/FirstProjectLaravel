@extends('layaouts.plantilla')
@section('title','Create page')

@section('body')
    <h1>Edición de un curso</h1>
    <fieldset>
        <legend>Edita el siguiente formulario</legend>
        <form action="{{route('curso.update',$curso)}}" method="post">
            
            @csrf
            @method('PUT')

            <label for="">Nombre:
                <input type="text" name="name" value="{{$curso->name}}">
            </label>
            <br>

            <label for="">Descripcion:<br>
                <textarea name="descripcion" cols="30" rows="10">{{$curso->descripcion}}
                </textarea>
            </label>
            <br>

            <label for="">Categoria:
                <input type="text" name="categoria" value="{{$curso->categoria}}">
            </label>
            <br>

            <button>Actualizar formulario</button>
        </form>
    </fieldset>
@endsection