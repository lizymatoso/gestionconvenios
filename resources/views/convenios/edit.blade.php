@extends('layouts.plantilla')

@section ('title', 'Editar Convenio')

@section('content')
    <h1>Edición de Convenio</h1>
    <form action="{{route('convenios.update', $id)}}" method="POST">
        @csrf
        @method('put')
        
                
        <label for="">
            <strong>Expediente Nº: </strong>
           
            <input type="text" name="expediente" value="{{old('expediente', $id->expediente)}}">
        </label>
        @error('expediente')
            <br>
            <small>*{{$message}}</small>
            <br>
            
        @enderror
        <br>
        <label for="">
            <strong>Año: </strong>
           
            <input type="text" name="anio" value="{{old('anio', $id->año)}}">
        </label>
        @error('anio')
            <br>
            <small>*{{$message}}</small>
            <br>
    
        @enderror
        <br>
        <label for="">
            <strong> Tipo de convenio: </strong>
            <input type="text" name="tipo" value="{{old('tipo', $id->tipo_convenio)}}">           
            
        </label>
        @error('tipo')
            <br>
            <small>*{{$message}}</small>
            <br>
        
        @enderror
        <br>
        <label for="">
            <strong>País: </strong>
            <input type="text" name="pais" value="{{old('pais', $id->pais)}}">
        </label>
        @error('pais')
            <br>
            <small>*{{$message}}</small>
            <br>
        
        @enderror
        <br>
        <label for="">
            <strong>Descripción:</strong>
            
            <textarea name="descripcion"  rows="2" cols="130">{{old('descripcion', $id->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        
        @enderror
        <br>
        <label for="">
            <strong>Resolución Nº:</strong>
            
            <input type="text" name="resolucion" value="{{old('resolucion', $id->resolucion)}}">
        </label>
        @error('resolucion')
            <br>
            <small>*{{$message}}</small>
            <br>
        
        @enderror
        <br>
        <br>
        <button type="submit" class="btn btn-secondary btn-sm">Actualizar Convenio</button>
    </form>
    
@endsection
  