<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'name',
        'image',
        'descricao',
        'requisitos',
        'video',
        'valor',
        'tempo_expiracao',
        'professor_id',
        'status'
    ];

    public function modulos_exibir() {
        return $this->hasMany(Modulo::class, 'cursos_id', 'id');
    }
}
