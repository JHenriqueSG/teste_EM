<?php

namespace App\Http\Controllers;

use App\Models\retangulo;
use Illuminate\Http\Request;

class RetangulosController extends Controller
{
    public function index()
    {
        $retangulo = retangulo::with('retangulo')->get();
        return response()->json($retangulo);
    }

    public function guardarRetangulo(Request $dados){

        $retangulo = new retangulo();
        $retangulo ->tipo = 'retangulo';
        $retangulo->fill($dados->all());
        $retangulo->area = $retangulo->base * $retangulo->altura / 2;
        $retangulo ->save();
    }


 
}
