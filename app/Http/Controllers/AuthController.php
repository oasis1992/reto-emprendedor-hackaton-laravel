<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return View('auth.login');
    }

    public function login_movil($email, $password)
    {

        $user = Usuario::where('email',$email)->first();

         $user->proyectos->each(function ($item, $key) {
               //$item->usuario->convocatorias_evaluadores;
                $item->proyectos_integrantes;
          //  dd($item->proyectos_evaluadores);
               $item->proyectos_evaluadores->each(function($item, $key){
                       $item;
               });
        });



        if($user)
        {
            if($user->tipo == 1 && $user->password == $password)
            {
                return response()->json(['id' => $user->id,'response' => true, 'nombre' => $user->nombre,
                    'data' => $user],200);
            }
        }

        return response()->json(['response' => false],200);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
