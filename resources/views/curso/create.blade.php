@extends('layaouts.plantilla')
@section('title','Create page')

@section('body')
    <h1>Creación de un curso</h1>
    <fieldset>
        <legend>Llena el sigueinte formulario</legend>
        <form action="{{route('curso.store')}}" method="post">
            
            @csrf

            <label for="">Nombre:
                <input type="text" name="name" value="{{old('name')}}">
            </label>

            @error('name')
                <br>
                <span>*{{$message}}</span>
                <br>
            @enderror
            <br>

            <label for="">Descripcion:<br>
                <textarea name="descripcion" cols="30" rows="10"></textarea>
            </label>
            @error('descripcion')
                <br>
                <span>*{{$message}}</span>
                <br>
            @enderror

            <br>

            <label for="">Categoria:
                <input type="text" name="categoria">
            </label>
            @error('categoria')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
            <br>

            <button>Enviar formulario</button>
        </form>
    </fieldset>
@endsection
