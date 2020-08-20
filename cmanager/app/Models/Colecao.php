<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
    //
    protected $fillable = [
        'nome', 
        'dimensao', 
        'numero', 
        'instituicao', 
        'tuteladireta', 
        'localizacao', 
        'descricao', 
        'relevancia', 
        'utilizacao', 
        // 'conservacao', 
        'observacoes', 
        'bibliografia'
    ];
}
