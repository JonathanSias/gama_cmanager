<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Museu extends Model
{
    // 
    protected $fillable = [
        'nome', 
        'endereco', 
        'bairro', 
        'cep', 
        'codigoMuseu', 
        'telefone', 
        'email', 
        'horarios', 
        'descricao'
    ];
}
