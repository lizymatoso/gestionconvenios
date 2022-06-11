@extends('layouts.plantilla')

@section ('title', 'Convenios')

@section('content')
    <h1 class="text-center">CONVENIOS</h1>
    
    <ul>
        @foreach ($convenios as $convenio)
        
        <li>
           <a href="{{route('convenios.show', $convenio->id)}}" class="link-secondary"> {{$convenio->descripcion}} </a>
        
        </li>
        
        
        @endforeach

    </ul>
    
    {{$convenios->links()}}
@endsection


  