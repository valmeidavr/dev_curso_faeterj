<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;

class AulaController extends Controller
{
    public function comentar(Request $request) {
       //Precisamos colocar o metodo Auth::user()->id em alunos_id
        
        $query = [
            'descricao' => $request->comentario,
            'aulas_id' => $request->aula_id,
            'aluno_id' => '1'
        ];

        $comentarios = Comentarios::create($query);
        
        return response()->json($comentarios);
    }
}
