<?php

namespace App\Http\Controllers;
use App\Models\Vagas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexx()
{
    $vagas = Vagas::all();
    return view('home', compact('vagas'));
}

}
