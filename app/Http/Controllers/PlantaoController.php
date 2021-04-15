<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantaoController extends Controller
{
    public function carregarPlantao()
    {
        return view('plantao.cadastrarPlantao');
    }
     public function resultadoPlantao()
    {
        return view('plantao.resultadoPlantao');
    }

}
