<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaMetrica extends Model
{
    protected $table = "categoria_metrica";

    public function organizacion(){
        return $this->hasMany('App\Organizacion');
    }

    public function convocatoria_categoria(){
        return $this->belongsTo('App\ConvocatoriaCategoria');
    }

    public function proyectos_evaluaciones(){
        return $this->hasMany('App\ProyectoEvaluacion');
    }
}
