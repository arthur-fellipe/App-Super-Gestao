<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {       
        return view('site.contato');
    }

    public function salvar(Request $request) {
        $request->validate([
            'nome' => 'required|min:2|max:50',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000',
        ]);
        
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
