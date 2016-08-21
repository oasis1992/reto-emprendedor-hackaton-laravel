<?php

namespace App\Http\Controllers;

use App\Convocatoria;

use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConvocatoriasController extends Controller
{
    public function index($organizacion_id){
        $convocatorias = Convocatoria::where('organizacion_id', "=", $organizacion_id)->get();
        return View('convocatoria.index')->with('resultados', $convocatorias)->with('organizacion_id', $organizacion_id);
    }

    public function create($organizacion_id){
        return View('convocatoria.create')->with('organizacion_id', $organizacion_id);
    }

    public function store(Request $request){
        $conv = new Convocatoria();
        $conv->name = $request->nombre;
        $conv->fecha_inicio = new DateTime($request->fecha_inicio);
        $conv->fecha_termino = new DateTime($request->fecha_termino);
        $conv->fecha_termino = new DateTime($request->fecha_termino);
        $conv->calif_aprovatoria = $request->calif_aprovatoria;
        $conv->evaluador_proyecto = $request->evaluador_proyecto;
        $conv->organizacion_id = $request->organizacion_id;
        $conv->save();

        return redirect()->route('convocatoria_index', ['organizacion_id' => $request->organizacion_id]);
    }
}
