<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Centro;

class ConsultaController extends Controller
{
    public function carregarConsulta()
    {
         $centros = Centro::all();
         return view('consulta.cadastrarConsulta' ,compact('centros'));
    }
    public function resultadoConsulta(Request $request) 
    {
        $consulta = new Consulta();
        $consulta->hora_inicial = $request->hora_inicial;
        $consulta->hora_termino = $request->hora_termino;
        $consulta->data = $request->data;
        $consulta->especialidade = $request->especialidade;
        $consulta->centro_id = $request->centro;
        $consulta->save();

        return view('consulta.resultadoConsulta' ,compact('consulta'));
    }
    public function editarConsulta($id)
    {
        $consulta = Consulta::where('id', $id )->first();
        return view('consulta.editarConsulta', compact('consulta'));
    }
    public function edicaoConsulta(Request $request)
    {
        $consulta = Consulta::where('id', $request->id)->first();
        $consulta->hora_inicial = $request->hora_inicial;
        $consulta->hora_termino = $request->hora_termino;
        $consulta->data = $request->data;
        $consulta->especialidade = $request->especialidade;
        $consulta->update();
        return redirect (route ('listaConsultaAdm'));
    }
    public function excluirConsulta($id)
    {
        Consulta::destroy($id);
        return redirect (route ('listaConsultaAdm'));
    }
    
    
}
