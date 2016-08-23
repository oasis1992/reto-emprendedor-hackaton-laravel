<?php

namespace App\Http\Controllers;

use App\Convocatoria;
use App\ConvocatoriaCategoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConvocatoriaCategoriaController extends Controller
{
    public function index($convocatoria_id){
        $convocatoria = Convocatoria::find($convocatoria_id);
        $resultados = $convocatoria->convocatorias_categorias;
        return View('convocatoria_categoria.index')->with('resultados', $resultados)->with('convocatoria_id', $convocatoria_id);
    }

    public function create($convocatoria_id){
        return View('convocatoria_categoria.create')->with('convocatoria_id', $convocatoria_id);
    }

    public function store(Request $request){
        $convocatoria_categoria = new ConvocatoriaCategoria();
        $convocatoria_categoria->nombre = $request->nombre;
        $convocatoria_categoria->convocatoria_id = $request->convocatoria_id;
        $convocatoria_categoria->save();
        return redirect()->route('convocatoria_secciones_index', ['convocatoria_id' => $request->convocatoria_id]);
    }
}
