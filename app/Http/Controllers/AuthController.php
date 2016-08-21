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
        if($login = Auth::attempt(['email'=> $email, 'password'=> $password]))
        {
            if($user->tipo == 1 )
            {
                return response()->json(['response' => true]);
            }
        }

        return response()->json(['response' => false]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
