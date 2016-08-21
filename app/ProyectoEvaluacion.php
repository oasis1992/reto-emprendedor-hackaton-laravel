<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoEvaluacion extends Model
{
    protected $table = "proyecto_evaluacion";

    public function categoria_metrica(){
        return $this->belongsTo('App\CategoriaMetrica');
    }

    public function articles(){
        return $this->belongsToMany('App\ProyectoEvaluador')->whitTimestamps; // esto se usa para las relaciones M:M
        //whitTimestamps sirve para solucionar el problema con la fecha de creación y actualización
    }
}
