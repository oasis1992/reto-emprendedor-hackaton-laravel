<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "usuarios";

    protected $fillable = [
        'nombre', 'email', 'tipo' ,'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proyectos(){
        return $this->hasMany('App\Proyecto');
    }


    public function organizaciones(){
        return $this->hasMany('App\Organizacion');
    }

    public function convocatorias_evaluadores(){
        return $this->hasMany('App\ConvocatoriaEvaluador');
    }

}
