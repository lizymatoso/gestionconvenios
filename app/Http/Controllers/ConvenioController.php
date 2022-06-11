<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ConvenioController extends Controller
{
    public function index(){

        $convenios = Convenio::orderBy('id','desc')->paginate();
       
        return view('convenios.index', compact('convenios'));
    }

    public function create(){
        return view('convenios.create');
    }

    public function store(Request $request){

        $request->validate([
            'expediente'=>'required',
            'anio' => 'required',
            'tipo' => 'required',
            'pais' => 'required',
            'descripcion' => 'required',
            'resolucion' => 'required'
        ]);
        


        $convenio = new Convenio ();

        $convenio->expediente = $request ->expediente;
        $convenio->año= $request ->anio;
        $convenio->tipo_convenio = $request ->tipo;
        $convenio->pais = $request ->pais;
        $convenio->descripcion = $request ->descripcion;
        $convenio->resolucion = $request ->resolucion;
       
        $convenio->save();
        return redirect()->route('convenios.show',$convenio->id);
    }

    public function show($id){
        $curso =  Convenio::find($id);
       
        return view('convenios.show', compact('curso'));
    }
    public function edit(Convenio $id){
        return view('convenios.edit', compact ('id'));

        
    }

    public function update(Request $request, Convenio $id){
        $request->validate([
            'expediente'=>'required',
            'anio' => 'required',
            'tipo' => 'required',
            'pais' => 'required',
            'descripcion' => 'required',
            'resolucion' => 'required'
        ]);

        $id->expediente = $request ->expediente;
        $id->año= $request ->anio;
        $id->tipo_convenio = $request ->tipo;
        $id->pais = $request ->pais;
        $id->descripcion = $request ->descripcion;
        $id->resolucion = $request ->resolucion;
       
        $id->save();
        return redirect()->route('convenios.show',$id);
    }
    public function destroy(Convenio $id){
        $id->delete();

        return redirect()->route('convenios.index');

    }
}
