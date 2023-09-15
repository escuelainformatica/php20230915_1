<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table="libros";
    protected $fillable=['titulo','idcategoria'];

    // llave foranea muchos-es-a-uno.
    public function categoria() {
        return $this->belongsTo(Categoria::class,'idcategoria','id');
    }
}
