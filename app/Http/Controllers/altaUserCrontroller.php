<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests;

class altaUserCrontroller extends Controller
{
    public function index(){
      $ncf = Usuario::all();
      return view("register_user.register_user.index")->with('org',$ncf);
    }

      public function store(Request $request){
        $dato = ['nombre'=>$request->input('nombres').$request->input('apellido'),
        'email'=>$request->input('email'),
        'tipo'=>$request->input('tipo'),
        'password'=>$request->input('password')
      ];
        $alta_org =  Usuario::create($dato);
        return redirect()->route("alta_org");//modificar
      }
        public function create(){
          return view("register_user.register_user.create");
        }
}
