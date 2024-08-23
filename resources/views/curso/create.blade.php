@extends('layaouts.plantilla')
@section('title','Create page')

@section('body')
    <h1>Creación de un curso</h1>
    <fieldset>
        <legend>Llena el sigueinte formulario</legend>
        <form action="{{route('curso.store')}}" method="post">
            
            @csrf

            <label for="">Nombre:
                <input type="text" name="name">
            </label>
            <br>

            <label for="">Descripcion:<br>
                <textarea name="descripcion" cols="30" rows="10"></textarea>
            </label>
            <br>

            <label for="">Categoria:
                <input type="text" name="categoria">
            </label>
            <br>

            <button>Enviar formulario</button>
        </form>
    </fieldset>
@endsection
