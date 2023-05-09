@extends('abre_pagina')

@section('INICIA')
   <div class="container">
       <h1 class="display-4">Estas en el Notas</h1>
   </div> 

{{-- En esta seccion empieza el formulario --}}
<div class="container fluid mt-5 my-5" >
    @if (session('Mensaje'))
    <div class="alert alert-success" role="alert">
        {{session('Mensaje')}}
      </div>
    @endif
    <form action="{{route('crear')}}" method="POST">
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
        <label for="nombre">Nombre de la nota:</label>
        <input type="text" placeholder="Ingresa nombre de nota" id="nombre" name="nombre" 
        class="form-control mb-2" value="{{old('nombre')}}" > <br>
        <label for="nombre">Descripción de la nota:</label>
        <input type="text" placeholder="Ingresa descripcion de la nota" id="descripcion" 
        name="descripcion" class="form-control mb-2"  value="{{old('descripcion')}}"><br>
        <input type="submit" class="btn btn-block btn-primary" value="Registra nota" >
    </form>
</div>



{{-- Fin formulario --}}
   {{-- Esta seccion se encuentra la tabla de notas --}}
   <div class="container text-center">
    {{$notas->links()}}
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre de nota</th>
            <th scope="col">Descripccion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @if (isset($notas))
            @foreach ($notas as $item)
            <tr>
             <th scope="row">{{$item->id}}</th>
             <td><a href="{{route('detalle',$item->id)}}"class="badge badge-primary" >{{$item->nombre}}</a></td>
             <td>{{$item->descripcion}}</td>
             <td><a href="{{route('editar',$item)}}" class="btn btn-warning">Editar</a>
                <form action="{{route('eliminar',$item->id)}}" method="POST" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                </td>
              
                
           </tr> 
            @endforeach
            @endif
         
         
        </tbody>
      </table>
      

   </div>
@endsection