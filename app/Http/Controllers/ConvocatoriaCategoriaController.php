<?php

namespace App\Http\Controllers;

use App\Convocatoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConvocatoriaCategoriaController extends Controller
{
    public function index($convocatoria_id){
        $convocatoria = Convocatoria::find($convocatoria_id);
        $resultados = $convocatoria->convocatorias_categorias;
        return View('convocatoria_categoria.index')->with('resultados', $resultados);
    }
}
