<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexx()
{
    $empresas = Empresa::all();
    return view('home', compact('empresas'));
}

}
