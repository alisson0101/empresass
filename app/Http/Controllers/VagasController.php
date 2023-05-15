<?php

namespace App\Http\Controllers;
use App\Models\Vagas;
use App\Models\Empresa;

use Illuminate\Http\Request;

class VagasController extends Controller
{
    //
    public function gerarvagas(){
        return view ('vagasemprego');
       // $empresa = Auth::user()->empresa;
        //$vagas = $empresa->vagas;
    
     //   return view('vagasemprego', compact('empresa', 'vagas'));
    }
    public function store2(Request $request){
        Vagas::create([
        'cargo' => $request->cargo,
        'renumeracao' => $request->renumeracao,
        'exigencias' => $request->exigencias,
        'responsa' => $request->responsa,
        'cnpj' => $request->cnpj,   
        ]);
        session()->flash('success','Vaga cadastrada com sucesso!');
        return view('vagasemprego');
        }
        
        
}
