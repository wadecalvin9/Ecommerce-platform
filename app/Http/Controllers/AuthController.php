<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ]);



        $user = User::create($data);
        $request->session()->regenerate();
        Auth::login($user);
        return redirect(route('home'));
    }

    public function login (Request $request){

          $data = $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        if (Auth::attempt($data)){

            $request->session()->regenerate();
             return redirect(route('home'));
        }else{
         return redirect(route('login.page'))->with('error','The credentials provided dont match our records');
        }

    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

         return redirect(route('home'));
    }


}
