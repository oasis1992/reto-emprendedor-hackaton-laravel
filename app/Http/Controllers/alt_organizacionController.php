<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;
use App\Http\Requests;

class alt_organizacionController extends Controller
{
    public function index(){
      $ncf = Organizacion::all();
      return view("organizaciones.index")->with("org",$ncf);
    }
    public function create(){
      return view("organizaciones.create");
    }
    public function store(Request $request){
      $dato = ['nombre'=>$request->input('org_name'),
      'usuario_id'=>1];
      $alta_org =  Organizacion::create($dato);
      return redirect()->route("alta_org");
    }
}
