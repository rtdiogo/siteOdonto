<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logar(Request $request) {
        
        $request->validate([
            'login'  => 'required',
            'senha'=> 'required'
        ]);

        if ($request->login == 'teste@teste.com' && $request->senha == '123456') {
            return redirect()->route('registro');
        } 
        return redirect()->back()->with('erro', 'Login ou senha incorreta');
        

    }
    
    public function login() {
        return view('login');
    }
}

