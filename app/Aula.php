<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillable = [
        'name',
        'video',
        'descricao',
        'tempo',
        'modulos_id',
        'status'
    ];

    public function anexos_exibir() {
        return $this->hasMany(Anexo::class, 'aulas_id', 'id');
    }
}
