<?php

namespace App\Http\Controllers;

use App\Convocatoria;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConvocatoriasController extends Controller
{
    public function index($organizacion_id){
        $convocatorias = Convocatoria::all();
        return View('convocatoria.index')->with('resultados', $convocatorias)->with('organizacion_id', $organizacion_id);
    }

    public function create(){
        return View('convocatoria.create');
    }

    public function store(Request $request){
        $conv = new Convocatoria();
        $conv->nombre = $request->nombre;
        $conv->fecha_inicio = new DateTime($request->fecha_inicio);
        $conv->fecha_termino = new DateTime($request->fecha_termino);
        $conv->fecha_termino = new DateTime($request->fecha_termino);
        $conv->calf_aprobatoria = $request->calf_aprobatoria;
        $conv->evaluador_proyecto = $request->evaluador_proyecto;
        $conv->organizacion_id = $request->organizacion_id;
        $conv->save();
        return redirect()->route('convocatoria_index');
    }
}
