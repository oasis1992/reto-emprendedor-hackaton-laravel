<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoTipo extends Model
{
    protected $table = "campo_tipo";

    public function sectiones_campos(){
        return $this->hasMany('App\SeccionCampo');
    }
}
