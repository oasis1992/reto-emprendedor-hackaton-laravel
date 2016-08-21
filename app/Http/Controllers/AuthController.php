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
        /*
         $user->proyectos->each(function ($item, $key) {
               //$item->usuario->convocatorias_evaluadores;
                $item->proyectos_integrantes;
          //  dd($item->proyectos_evaluadores);
               $item->proyectos_evaluadores->each(function($item, $key){
                       $item;
               });
        });
        */

        $data = ['id' => $user->id, 'response' => true,  'nombre' => $user->nombre, 'proyectos' => null];
        for($i = 0; $i < count($user->proyectos); $i++){

          // dd($user->proyectos[0]->proyectos_evaluadores[0]->convocatoria_evaluador->usuario);
            $data['proyectos'][] = ['nombre' => $user->proyectos[$i]->nombre, 'descripcion' => $user->proyectos[$i]->descripcion,
                'estado' => $user->proyectos[$i]->estado, 'convocatoria' => $user->proyectos[$i]->convocatoria->name];

            for($x = 0; $x < count($user->proyectos[$i]->proyectos_integrantes); $x++){
                $data['proyectos'][$i]['integrantes'][] = array('nombre' => $user->proyectos[$i]->proyectos_integrantes[$x]->nombre,
                    'email' => $user->proyectos[$i]->proyectos_integrantes[$x]->email, 'id' => $user->proyectos[$i]->proyectos_integrantes[$x]->id);
            }


            for($x = 0; $x < count($user->proyectos[$i]->proyectos_evaluadores); $x++){
                $data['proyectos'][$i]['evaluadores'][] = array('nombre' => $user->proyectos[$i]->proyectos_evaluadores[$x]->convocatoria_evaluador->usuario->nombre);
            }
        }

        if($user)
        {
            if($user->tipo == 1 && $user->password == $password)
            {
                return response()->json([
                    'data' => $data],200);
            }
        }

        return response()->json(['response' => false],200);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
