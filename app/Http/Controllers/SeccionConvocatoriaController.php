<?php

namespace App\Http\Controllers;

use App\Convocatoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class SeccionConvocatoriaController extends Controller
{
    public function index($convocatoria_id){
        $convocatoria = Convocatoria::find($convocatoria_id);
        $resultados = $convocatoria-> convocatoria_secciones;
        return View('seccion_convocatoria.index')->with('resultados', $resultados);
    }
}
