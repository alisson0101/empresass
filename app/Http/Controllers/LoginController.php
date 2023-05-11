<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'senha');
        
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/vagasemprego');
        }
        
        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas']);
    }

   
}
