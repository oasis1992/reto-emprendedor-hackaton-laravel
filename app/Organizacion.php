<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table ="organizaciones";
    protected $fillable = [
        'id','nombre','usuario_id'
    ];
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
