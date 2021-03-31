<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaudeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function login()
    {
        return view('login');
    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function recuperarSenha()
    {
        return view('recuperarSenha');
    }
}
