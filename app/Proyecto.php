<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = "proyectos";
    //protected $fillable = [];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

    public function convocatoria(){
        return $this->belongsTo('App\Convocatoria');
    }

    public function convocatoria_categoria(){
        return $this->belongsTo('App\ConvocatoriaCategoria');
    }

    public function proyectos_integrantes(){
        return $this->hasMany('App\ProyectoIntegrante');
    }

    public function evaluadores_dudas(){
        return $this->hasMany('App\EvaluadorDuda');
    }

    public function proyectos_evaluadores(){
        return $this->hasMany('App\ProyectoEvaluador');
    }



}
