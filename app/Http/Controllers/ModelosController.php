<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use Illuminate\Http\Request;

class ModelosController extends Controller
{
    public function index()
    {
        $tipo = Modelos::with('triangulo' or 'retangulo')->get();
        return response()->json($tipo);
    }

    public function areaTotalCadastrada()
    {

        $tipo = Modelos::all();
        $totalArea = $tipo->sum('area');

        return $totalArea;

    }
}
