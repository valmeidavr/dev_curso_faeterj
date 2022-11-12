<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;

class AulaController extends Controller
{
    public function comentar(Request $request) {
       //Precisamos colocar o metodo Auth::user()->id em alunos_id
       //segunda de utilizar o create
     try {
            Comentarios::create([
                'descricao' => $request->comentario,
                'aulas_id' => $request->aula_id,
                'aluno_id' => \Auth::user()->id
            ]); 
            $comentarios = Comentarios::where('aulas_id', '=', $request->aula_id)->get();
            return view('card_comentarios', compact('comentarios'));
        }catch (\Exception $e) {
            return response()->json('error', 500);
        }
    }
}
