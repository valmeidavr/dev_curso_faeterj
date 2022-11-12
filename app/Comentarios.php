<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable = [
        'aluno_id',
        'descricao',
        'aulas_id'
    ];

    public function aluno_exibir() {
        return $this->hasOne(User::class, 'id', 'aluno_id');
    }
}
