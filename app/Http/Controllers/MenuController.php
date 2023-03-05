<?php

namespace App\Http\Controllers;

use App\Models\PersonaModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('Vistas.index');
    }

    public function guardar(Request $request){
        $persona = new PersonaModel();
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->edad = $request->edad;
        $persona->peso = $request->peso;
        $persona->altura = $request->altura;
        $persona->save();
        return redirect('registro');
    }

    public function edit(Request $request, $id){
        $person = PersonaModel::find($id);
        return view('Vistas.index2',compact('person'));
    }

    public function update(Request $request, $id){
        $persona = PersonaModel::find($id);
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->edad = $request->edad;
        $persona->peso = $request->peso;
        $persona->peso = $request->altura;
        $persona->save();
        return redirect('registro');
    }

    public function eliminar($id){
        $person = PersonaModel::find($id);
        return view('Vistas.index3',compact('person'));
    }

    public function destroy($id){
        $persona = PersonaModel::find($id);
        $persona->eliminado = true;
        $persona->save();
        return redirect('registro');
    }
}
