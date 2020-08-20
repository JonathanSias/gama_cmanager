<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    //
    protected $fillable = [
        'nome', 
        'instituicao', 
        'numeroinventario', 
        'outrosnumeros', 
        'data', 
        'epoca', 
        // 'colecao', 
        'titulo', 
        'material',
        'tecnica',
        'autoria',
        'altura',
        'largura',
        'comprimento',
        'procedencia',
        'doador',
        'localdeproducao',
        'descricao',
        'estadodeconservacao',
        'circulacaocondicao',
        'localizacao',
        'situacao',
        'inscricao',
        'referencianoacervo',
        'classificacao',
        'observacoes',
        'recebidopor',
        'preenchidopor',
        'datadepreenchimento',
        'revisadopor',
        'dataderevisao'
    ];
}
