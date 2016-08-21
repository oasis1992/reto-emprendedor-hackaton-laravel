<?php

namespace App\Http\Controllers;

use App\CategoriaMetrica;
use App\ConvocatoriaCategoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriaMetricaController extends Controller
{
    public function index($convocatoria_categoria_id){
        $conv_cat = CategoriaMetrica::all();

        return View('categoria_metrica.index')->with('resultados', $conv_cat)->with('convocatoria_categoria_id', $convocatoria_categoria_id);
    }

    public function create($categoria_convocatoria_id){

        return View('categoria_metrica.create')->with('categoria_convocatoria_id', $categoria_convocatoria_id);
    }

    public function store(Request $request){
        $metrica = new CategoriaMetrica();
        $metrica->nombre = $request->nombre;
        $metrica->porcentaje = $request->porcentaje;
        $metrica->convocatoria_categoria_id = $request->convocatoria_categoria_id;
        $metrica->save();
        return redirect()->route('categoria_metrica_index', ['convocatoria_categoria_id' => $request->convocatoria_categoria_id]);
    }
}
