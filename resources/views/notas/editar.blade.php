@extends('abre_pagina')

@section('INICIA')
    <h1 class="display-4">Editar nota:{{$datos_nota->id}}</h1>
    @if (session('Mensaje'))
    <div class="alert alert-success" role="alert">
        {{session('Mensaje')}}
      </div>
    @endif

    <form action="{{route('editar_nota',$datos_nota->id)}}" method="POST" class="mt-5 my-5">
        @method('PUT')
        @csrf
        @error('nombre')
        <div class="alert alert-danger" role="alert">
            No puedes agregar una nota sin nombre
          </div>  
        @enderror
        
        @error('descripcion')
        <div class="alert alert-danger" role="alert">
            No puedes agregar una nota sin descripcion
          </div>  
        @enderror
       <label for="nombre">Nombre: </label>
       <input type="text" name="nombre" 
       class="form-control" 
       value="{{$datos_nota->nombre}}
       "> 
       <label for="descripcion">Descripcion: </label>
       <input type="text" name="descripcion" 
       class="form-control" value="{{$datos_nota->descripcion}}">
       <input type="submit" class="btn btn-primary" value="Editar"> 
 
    </form>
   

@endsection