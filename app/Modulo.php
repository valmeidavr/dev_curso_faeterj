<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $fillable = [
        'nome',
        'cursos_id',
        'status'
    ];

    public function aulas_exibir() {
        return $this->hasMany(Aula::class, 'modulos_id', 'id');
    }
}
