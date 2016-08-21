<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluadorDuda extends Model
{
    protected $table = "evaluador_duda";

    public function proyecto(){
        return $this->belongsTo('App\Proyecto');
    }

    public function convocatoria_evaluador(){
        return $this->belongsTo('App\ConvocatoriaEvaluador');
    }
}
