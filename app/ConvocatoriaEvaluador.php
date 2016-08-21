<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConvocatoriaEvaluador extends Model
{
    protected $table = "convocatoria_evaluador";

    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function convocatoria(){
        return $this->belongsTo('App\Convocatoria');
    }

    public function evaluadores_dudas(){
        return $this->hasMany('App\EvaluadorDuda');
    }

    public function proyectos_evaluadores(){
        return $this->hasMany('App\ProyectoEvaluador');
    }
}
