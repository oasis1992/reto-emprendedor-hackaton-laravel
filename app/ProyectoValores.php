<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoValores extends Model
{
    protected $table = "proyecto_valores";

    public function proyecto(){
        return $this->belongsTo('App\Proyecto');
    }

    public function seccion_campo(){
        return $this->belongsTo('App\SeccionCampo');
    }
}
