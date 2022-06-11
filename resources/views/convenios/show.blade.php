@extends('layouts.plantilla')

@section('title', 'Convenio' . $curso->id)

@section('content')
    <h1> Convenio aprobado por resolución Nº: {{$curso->resolucion}} </h1>

    <p><strong>Tipo de convenio : </strong>{{$curso->tipo_convenio}}</p>
    <p> <strong> Descripción : </strong>{{$curso->descripcion}}</p>
    <p> <strong> País : </strong>{{$curso->pais}}</p>
    <p> <strong> Año : </strong>{{$curso->año}}</p>
    <p> <strong> Expediente : </strong>{{$curso->expediente}}</p>
    <br>
    <br>
    <br>

    
      
      
          <a class="nav-link active" aria-current="page" href="{{route('convenios.edit',$curso)}}">Editar convenio</a>
       
            <form action="{{route('convenios.destroy',$curso)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-secondary btn-sm">Eliminar</button>
            </form>
       


    
@endsection
