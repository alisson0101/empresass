<?php

namespace App\Http\Controllers;
use App\Models\Vagas;

use Illuminate\Http\Request;

class VagasController extends Controller
{
    //
    public function gerarvagas(){
        return view ('vagasemprego');
    }
    public function store2(Request $request){
        Vagas::create([
        'cargo' => $request->cargo,
        'renumeracao' => $request->renumeracao,
        'exigencias' => $request->exigencias,
        'responsabilidades' => $request->responsabilidades,

        ]);
return "cadastrado com sucesso!";
        }
}
