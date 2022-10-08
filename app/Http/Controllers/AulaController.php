<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;

class AulaController extends Controller
{
    public function comentar(Request $request) {
        $comentarios = [
            'descricao' => $request->comentario,
            'aulas_id' => $request->aula_id
        ];
        Comentarios::create($comentarios);
               
    }
}
