<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table = "convocatorias";
    //protected $fillable = [];

    public function proyectos(){
        return $this->hasMany('App\Proyecto');
    }

    public function organizacion(){
        return $this->belongsTo('App\Organizacion');
    }

    public function convocatorias_categorias(){
        return $this->hasMany('App\ConvocatoriaCategoria');
    }

    public function categorias_seccion(){
        return $this->hasMany('App\CategoriaSeccion');
    }

    public function convocatorias_evaluadores(){
        return $this->hasMany('App\ConvocatoriaEvaluador');
    }

    public function convocatoria_secciones(){
        return $this->hasMany('App\ConvocatoriaSeccion');
    }



}
