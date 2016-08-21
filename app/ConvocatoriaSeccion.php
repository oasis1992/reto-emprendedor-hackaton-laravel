<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConvocatoriaSeccion extends Model
{
    protected $table = "convocatoria_seccion";
    public function convocatoria(){
        return $this->belongsTo('App\Convocatoria');
    }

    public function secciones_campos(){
        return $this->hasMany('App\SeccionCampo');
    }

}
