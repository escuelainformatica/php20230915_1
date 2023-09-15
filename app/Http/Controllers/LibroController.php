<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function listar(){
        // $libros=Libro::all();

        $libros=Libro::with(['categoria'])->get();  // Eloquent
        return view('tabla',['libros'=>$libros]);
    }
    public function listar2(){
        $libros=DB::table('libros')
            ->join('categorias','libros.idcategoria','=','categorias.id')
            ->get();  // Database
        return view('tabla2',['libros'=>$libros]);
    }

}
