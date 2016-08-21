<?php

namespace App\Http\Controllers;

use App\Convocatoria;
use App\ConvocatoriaSeccion;
use Illuminate\Http\Request;

use App\Http\Requests;

class SeccionConvocatoriaController extends Controller
{
    public function index($convocatoria_id){
        $convocatoria = ConvocatoriaSeccion::where('convocatoria_id', '=', $convocatoria_id)->get();

        for($i = 0; $i < count($convocatoria); $i++){
            $convocatoria[$i]->convocatoria_secciones;
        }

        return View('seccion_convocatoria.index')->with('resultados', $convocatoria)->with('convocatoria_id', $convocatoria_id);
    }

    public function create($convocatoria_id){

        return View('seccion_convocatoria.create')->with('convocatoria_id', $convocatoria_id);
    }

    public function store(Request $request){
        $convocatoria_id = $request->convocatoria_id;
        $seccion_convocatoria = new ConvocatoriaSeccion();
        $seccion_convocatoria->nombre = $request->nombre;
        $seccion_convocatoria->convocatoria_id = $convocatoria_id;
        $seccion_convocatoria->save();

        return redirect()->route('secciones_convocatoria_index', ['convocatoria_id' => $convocatoria_id]);
    }
}
