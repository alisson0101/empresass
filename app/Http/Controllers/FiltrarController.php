<?php

namespace App\Http\Controllers;
use App\Models\Vagas;
use App\Models\Empresa;

use Illuminate\Http\Request;

class FiltrarController extends Controller
{
    public function filtrar(Request $request)
{
    $vagas = Vagas::query();

    if ($request->has('cargo')) {
        $vagas->where('cargo', 'like', '%' . $request->input('cargo') . '%');
    }

    $vagasFiltradas = $vagas->get();

    return view('vagasfiltradas', ['vagas' => $vagasFiltradas]);
    
    $cargo = $request->input('cargo');
	/*$descricao = $request->input('descricao');
	$empresa = $request->input('empresa');
	$salario_min = $request->input('salario_min');
	$salario_max = $request->input('salario_max');
*/
	$vagas = Vagas::where('cargo', 'like', "%$cargo%")
				->whereHas('empresa', function($query) use($empresa) {
					$query->where('nome', 'like', "%$empresa%");
				})
				;

	return view('vagasfiltradas', ['vagas' => $vagas]);

} 

}
