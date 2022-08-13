<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nome',
        'imagem',
        'descricao',
        'requisitos',
        'video',
        'valor',
        'tempo_expiracao',
        'professor_id',
        'status'
    ];
}
