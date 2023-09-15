<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar()
    {
        $categorias=Categoria::with(['libros'])->get();
        return view('categorias',['categorias'=>$categorias]);
    }
}
