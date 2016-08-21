<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConvocatoriaEvaluador;
use App\Proyecto;
use App\Http\Requests;
use Softon\Sms\Facades\Sms;

class evaluadorController extends Controller
{
    public function index(){
      $ncf = ConvocatoriaEvaluador::all();

        return view("evaluador.index")->with('org',$ncf);
    }

    public function store(){

    }

    public function detallproyect($id){

      $datos = Proyecto::where('id',$id)->get();
      //return $datos[0]->convocatoria_categoria->categorias_metricas[0]->nombre;
      return view("evaluador.create")->with('datos',$datos);

    }
}
