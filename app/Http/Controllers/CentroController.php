<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function listaCentro(){
        return view('centro.listaCentro');
    }
    public function editarCentro(){
        return view('centro.editarCentro');
    }
}
