<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function welcomeLogin(){
        return view('login.entrar');
    }
    
    public function entrar(Request $request){

        $dados = $request->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('welcome.list');
        }
        
        return redirect()->route('welcome.login');
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('welcome.login');
    }

}
