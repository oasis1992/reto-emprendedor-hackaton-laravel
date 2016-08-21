<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoIntegrante extends Model
{
    protected $table = "proyectos_integrantes";
    //protected $fillable = [];

    public function proyecto(){
        return $this->hasMany('App\Proyecto');
    }
}
