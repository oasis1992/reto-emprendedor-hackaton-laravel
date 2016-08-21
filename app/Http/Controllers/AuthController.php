<?php

namespace App\Http\Controllers;

use App\User;
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
        $user = User::where('email',$email)->first();
        if($user)
        {
            if($user->tipo == 1 && $user->password == $password)
            {
                return response()->json(['response' => true, 'nombre' => $user->nombre],200);
            }
        }

        return response()->json(['response' => false],200);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
