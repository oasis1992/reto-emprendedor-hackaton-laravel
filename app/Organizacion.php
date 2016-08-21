<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table ="organizacion";
    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

    public function convocatorias(){
        return $this->hasMany('App\Convocatoria');
    }

    public function convocatoria(){
        return $this->belongsTo('App\Convocatoria');
    }
}
