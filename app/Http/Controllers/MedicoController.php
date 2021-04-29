<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Plantao;
use App\Models\Consulta;

class MedicoController extends Controller
{
    public function carregarMedico()
    {
        $plantoes = Plantao::all();
        $consultas = Consulta::all();
        return view('medico.cadastrarMedico',compact('plantoes','consultas'));
    }
    public function resultadoMedico(Request $request)
    {
        $medico = new Medico();
        $medico->nome = $request->nome;
        $medico->crm = $request->crm;
        $medico->especialidade = $request->especialidade;
        $medico->plantao_id = $request->plantao;
        $medico->consulta_id = $request->consulta;
        $medico->save();

        
        return view('medico.resultadoMedico', compact('medico'));
    }
    public function listaMedico()
    {
        $medicos = Medico::all();
        return view('medico.listaMedico', compact('medicos'));
    }
    public function listaMedicoAdm()
    {
        $medicos = Medico::all();
        return view('medico.listaAdm', compact('medicos'));
    }
    public function editarMedico($id)
    {
        $medico = Medico::where('id', $id )->first();
        return view('medico.editarMedico', compact('medico'));
    }
    public function edicaoMedico(Request $request)
    {
        $medico = Medico::where('id', $request->id)->first();
        $medico->nome = $request->nome;
        $medico->crm = $request->crm;
        $medico->especialidade = $request->especialidade;
        $medico->update();
        return redirect (route ('listaMedicoAdm'));
    }
    public function excluirMedico($id)
    {
        Medico::destroy($id);
        return redirect (route ('listaMedicoAdm'));
    }

}
