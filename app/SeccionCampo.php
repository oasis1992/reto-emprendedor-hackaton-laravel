<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionCampo extends Model
{
    protected $table = "seccion_campo";

    public function campo_tipo(){
        return $this->belongsTo('App\CampoTipo');
    }

    public function convocatoria_seccion(){
        return $this->belongsTo('App\CampoTipo');
    }
}
