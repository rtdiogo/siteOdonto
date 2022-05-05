<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroController extends Controller
{
    public function registro(Request $request) {
    
    $request->validade([
    'nome' => 'required',
    'email' => 'required',
    'contato' => 'required',
    'senha' => 'required',
    'caixa' => 'required',
    'data' => 'required',
  ]);

    return redirect()->route('registro')->withinput();


}
}
