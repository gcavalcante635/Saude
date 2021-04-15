<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function carregarConsulta()
    {
        return view('consulta.cadastrarConsulta');
    }
    public function resultadoConsulta(Request $request) 
    {
        return view('consulta.resultadoConsulta');
    }
    
    
}
