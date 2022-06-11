@extends('layouts.plantilla')

@section ('title', 'Convenios Crea nuevo')

@section('content')
    <h2>ALTA DE UN NUEVO CONVENIO</h2>
    <form action="{{route('convenios.store')}}" method="POST">
        @csrf
      
        <form>
            <div class="row">
              
                <label for=" " class=""> Expediente Nº: </label>
            </div>
            <div class="row">
                <input type="text" name="expediente" value="{{old('expediente')}}" class="form-control" aria-describedby="emailHelp" placeholder="ej. 01-2022-00001">
            </div>
                   
           
                   
                
        @error('expediente')
           <small>*{{$message}}</small>
                        
        @enderror
        
        <br>

        <div class="row">
              <label for=" " class=""> Año: </label>
        </div>
        <div class="row">
            <input type="text" name="anio" value="{{old('anio')}}" class="form-control" aria-describedby="emailHelp" placeholder="ej. 2022">
        </div>
        
        @error('anio')
            
            <small>*{{$message}}</small>
            
        
        @enderror
        <br>
        <div class="row">
            <label for=" " class=""> Tipo de convenio: </label>
        </div>
        <div class="row">
          <input type="text" name="tipo" value="{{old('tipo')}}" class="form-control" aria-describedby="emailHelp" placeholder="ej. aprueba o ratifica">
        </div>
        @error('tipo')
           
            <small>*{{$message}}</small>
           
        
        @enderror
        <br>
        <div class="row">
            <label for=" " class=""> País: </label>
        </div>
        <div class="row">
          <input type="text" name="pais" value="{{old('pais')}}" class="form-control" aria-describedby="emailHelp" placeholder="ej. argentina">
        </div>

        
        @error('pais')
            <small>*{{$message}}</small>
            
        
        @enderror
        <br>
        <div class="row">
            <label for=" " class=""> Descripción: </label>
        </div>
        <div class="row">
            <textarea name="descripcion"  class="form-control" aria-describedby="emailHelp" placeholder="ej. convenio marco con...." rows=""{{old('descripcion')}}></textarea>
            
        </div>
       
        @error('descripcion')
            <small>*{{$message}}</small>
          
        
        @enderror
        <br>
        <div class="row">
            <label for=" " class=""> Resolución Nº: </label>
        </div>
        <div class="row">
          <input type="text" name="resolucion" value="{{old('resolucion')}}" class="form-control" aria-describedby="emailHelp" placeholder="ej. 011/22">
        </div>
        
        @error('resolucion')
          
            <small>*{{$message}}</small>
          
        
        @enderror
        <br>
        <button type="submit" class="btn btn-secondary btn-sm">Agregar Convenio</button>
    </form>
@endsection
  
