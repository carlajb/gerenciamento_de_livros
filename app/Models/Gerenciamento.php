<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerenciamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 
        'descricao',
       'autor', 
        'quantidade', 
        'preco', 
        'estoque',
        'autor_biografia',
        'autor_nacionalidade',
    ];
}
