<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    //
    public function index()
    {
        $cursos = Curso::all(); 
        return response()->json($cursos);    
    }
    public function create(Request $request)
    { 
        Curso::create($request->all());
        return response()->json(['success' => true]);
    }
    public function show($cursos_id)
    {
        $cursos= Curso::findOrFail($cursos_id);
        return response()->json($cursos);
    }
    public function update(Request $request, $cursos_id)
    {        
            Curso::findOrFail($cursos_id)->update($request->all());
            return response()->json(['success' => true]);   
    }    
    public function destroy($cursos_id)
    {
        Curso::findOrFail($cursos_id)->delete();
        return response()->json(['success' => true]);
    }
}
