<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoEvaluador extends Model
{
    protected $table = "proyecto_evaluador";

    public function proyecto(){
        return $this->belongsTo('App\Proyecto');
    }

    public function convocatoria_evaluador(){
        return $this->belongsTo('App\ConvocatoriaEvaluador');
    }

    public function proyectos_evaluaciones(){
        return $this->hasMany('App\ProyectoEvaluacion');
    }
}
