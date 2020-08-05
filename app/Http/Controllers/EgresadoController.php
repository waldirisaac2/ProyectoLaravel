<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Egresado;
class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $egresados = Egresado::all(); 
        return response()->json($egresados);
    }


    public function create(Request $request)
    {
        //
        Egresado::create($request->all());
        return response()->json(['success' => true]);
    }

    /*public function misdatos()
    {
       $result = User::join('personas', 'personaID', '=', 'personas.id')
        ->join('paises', 'personas.pais', '=', 'paises.id')
        ->join('departamentos', 'personas.departamento', '=', 'departamentos.id')->where('personaID','=',auth()->user()->id)
        ->select('users.name as usuario','users.avatar','personas.nombre','personas.ap_materno','users.role',
        'personas.ap_paterno','personas.dni','personas.celular','personas.dni', 'paises.nombre as pais',
        'personas.email','personas.fec_nacimiento','personas.est_civil','personas.domicilio_actual','personas.sexo'
        ,'personas.dependiente','departamentos.nombre as departamentos','personas.id as persona_ID','users.id as user_ID')
        ->get();
        return response()->json($result);
    }*/


    public function show($egresado_id)
    {

        
        $egresado= Egresado::findOrFail($egresado_id);
        
        
        return response()->json($egresado);
    }

    public function update(Request $request, $egresado_id)
    {
        Egresado::findOrFail($egresado_id)->update($request->all());
            return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($egresado_id)
    {
        Egresado::findOrFail($egresado_id)->delete();
        return response()->json(['success' => true]);
    }
}
