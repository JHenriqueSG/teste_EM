<?php

namespace App\Http\Controllers;

use App\Models\triangulo;
use Illuminate\Http\Request;

class TriangulosController extends Controller
{
        public function index()
    {
        $triangulo = triangulo::with('triangulo')->get();
        return response()->json($triangulo);

    
    }
    
    public function guardarTriangulo(Request $dados){

        $triangulo = new triangulo();
        $triangulo ->tipo = 'triangulo';
        $triangulo->fill($dados->all());
        $triangulo->area = $triangulo->base * $triangulo->altura / 2;
        $triangulo ->save();
    }
}
