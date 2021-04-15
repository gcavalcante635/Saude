<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function carregarMedico()
    {
        return view('medico.cadastrarMedico');
    }
    public function resultadoMedico(Request $request)
    {
        return view('medico.resultadoMedico');
    }
    public function listaMedico()
    {
        return view('medico.listaMedico');
    }
    public function editarMedico()
    {
        return view('medico.editarMedico');
    }

}
