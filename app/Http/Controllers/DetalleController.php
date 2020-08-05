<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle;

class DetalleController extends Controller
{
    public function index()
    {
        $detalle = Detalle::all(); 
        return response()->json($detalle);    
    }
    public function create(Request $request)
    { 
        Detalle::create($request->all());
        return response()->json(['success' => true]);
    }
    public function show($detalle_id)
    {
        $detalle= Detalle::findOrFail($detalle_id);
        return response()->json($detalle);
    }
    public function update(Request $request, $detalle_id)
    {        
        Detalle::findOrFail($detalle_id)->update($request->all());
            return response()->json(['success' => true]);   
    }    
    public function destroy($detalle_id)
    {
        Detalle::findOrFail($detalle_id)->delete();
        return response()->json(['success' => true]);
    }
}
