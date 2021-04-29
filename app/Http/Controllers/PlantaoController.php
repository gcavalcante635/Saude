<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantao;
use App\Models\Centro;

class PlantaoController extends Controller
{
    public function carregarPlantao()
    { 
        $centros = Centro::all();
        return view('plantao.cadastrarPlantao',compact('centros'));
    }
     public function resultadoPlantao(Request $request)
    {
        $plantao = new Plantao();
        $plantao->hora_inicial = $request->hora_inicial;
        $plantao->hora_termino = $request->hora_termino;
        $plantao->centro_id = $request->centro;
        $plantao->save();
        
        return view('plantao.resultadoPlantao' ,compact('plantao'));
    }
    public function editarPlantao($id)
    {
        $plantao = Plantao::where('id', $id )->first();
        return view('plantao.editarPlantao', compact('plantao'));
    }
    public function edicaoPlantao(Request $request)
    {
        $plantao = Plantao::where('id', $request->id)->first();
        $plantao->hora_inicial = $request->hora_inicial;
        $plantao->hora_termino = $request->hora_termino;
        $plantao->update();
        return redirect (route ('listaPlantaoAdm'));
    }
    public function excluirPlantao($id)
    {
        Plantao::destroy($id);
        return redirect (route ('listaPlantaoAdm'));
    }

}
