<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro;

class CentroController extends Controller
{
    public function resultadoCentro(Request $request) 
    {
        $centro = new Centro();
        $centro->nome = $request->nome;
        $centro->bairro = $request->bairro;
        $centro->rua = $request->rua;
        $centro->complemento = $request->complemento;
        $centro->hora_inicial = $request->hora_inicial;
        $centro->hora_termino = $request->hora_termino;
        $centro->tipo = $request->tipo;
        $centro->save();

        return view('centro.resultadoCentro' ,compact('centro'));
    }
    public function listaCentro(){

        $centros = Centro::all();
        return view('centro.listaCentro',compact('centros'));
    }
    public function editarCentro(){

        $centro = Centro::where('id', $id )->first();
        return view('centro.editarCentro', compact('centro'));
    }
    public function edicaoCentro(Request $request)
    {
        $centro = Centro::where('id', $request->id)->first();
        $centro->nome = $request->nome;
        $centro->bairro = $request->bairro;
        $centro->rua = $request->rua;
        $centro->complemento = $request->complemento;
        $centro->hora_inicial = $request->hora_inicial;
        $centro->hora_termino = $request->hora_termino;
        $centro->tipo = $request->tipo;
        $centro->update();
        return redirect (route ('listaCentroAdm'));
    }
    public function excluirCentro($id)
    {
        Centro::destroy($id);
        return redirect (route ('listaCentroAdm'));
    }

}
