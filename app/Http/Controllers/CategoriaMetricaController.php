<?php

namespace App\Http\Controllers;

use App\ConvocatoriaCategoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriaMetricaController extends Controller
{
    public function index($convocatoria_categoria_id){
        $conv_cat = ConvocatoriaCategoria::find($convocatoria_categoria_id);
        $resultados = $conv_cat->categorias_metricas;

        return View('categoria_metrica.index')->with('resultados', $resultados);
    }
}
