<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    //
    public function create(){
        return view ('cadastro');
    }
    public function store(Request $request){
        Empresa::create([
        'cnpj' => $request->cnpj,
        'nome' => $request->nome,
        'endereco' => $request->endereco,
        'email' => $request->email,
        'numero' => $request->numero,
        'senha' => $request->senha,

        ]);
return view('home');
        }
}
