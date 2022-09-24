<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use DB;

class CursoController extends Controller
{
    public function index() {
        $cursos = DB::select("select * from cursos");
        return view('cursos', compact('cursos'));
    }
    public function show_cursos($id) {
        //$curso = DB::select("select * from cursos where id = ?",[$id]);
        $curso = Curso::where('id', '=', $id)->get();

         return view('curso', compact('curso'));
    }
    public function cadastro(){
        return view('cad_cursos');
    }

    public function salvar_curso(Request $request) {
        $curso = [

        ];
        dd($request->all());
    }
}
