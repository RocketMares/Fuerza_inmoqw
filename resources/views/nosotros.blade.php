@extends('abre_pagina')

@section('INICIA')
<h1>Este es mi equpo de trabajo </h1>

@foreach ($equipo as $item)
    <a href="{{route('nosotros',$item)}}" class="h4 text-danger"> {{$item}}</a><br>
@endforeach

@if (!empty($nombre))

    @switch($nombre)
        @case('Andres')
            <h2>El nombre es: {{$nombre}}</h2>
            <p>{{$nombre}}: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, ea nemo quia tempora, magni reprehenderit nisi eveniet provident consequuntur quasi, asperiores animi tempore quaerat ipsam dignissimos esse? Et, alias iusto!</p>
        @break
        @case('Iker')
        <h2>El nombre es: {{$nombre}}</h2>
        <p>{{$nombre}}: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, ea nemo quia tempora, magni reprehenderit nisi eveniet provident consequuntur quasi, asperiores animi tempore quaerat ipsam dignissimos esse? Et, alias iusto!</p>
        @break
        @case('Samantha')
        <h2>El nombre es: {{$nombre}}</h2>
        <p>{{$nombre}}: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, ea nemo quia tempora, magni reprehenderit nisi eveniet provident consequuntur quasi, asperiores animi tempore quaerat ipsam dignissimos esse? Et, alias iusto!</p>
        @break
        @default
            
    @endswitch
@endif

@endsection
