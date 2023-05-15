<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
{
    return view('login');
}

public function login1(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
        return redirect()->intended('vagasemprego');
    } else {
        return redirect()->back()->withErrors(['message' => 'E-mail ou senha inválidos.']);
    }
    } 
}
