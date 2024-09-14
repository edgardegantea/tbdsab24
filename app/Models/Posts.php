<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'autor', 'nombre', 'resumen', 'contenido', 'imagen', 'adjuntos', 'categoria'
    ];

}


