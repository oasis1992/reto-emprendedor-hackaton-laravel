<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConvocatoriaCategoria extends Model
{
    protected $table = "convocatoria_categoria";
    //protected $fillable = [];

    public function proyectos(){
        return $this->hasMany('App\Proyecto');
    }

    public function categorias_metricas(){
        return $this->hasMany('App\CategoriaMetrica');
    }


}
