<?php

namespace App\Http\Controllers;

use App\Curso;
use App\User;
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
        $professores = $this->_professores();
        return view('cad_cursos', compact('professores'));
    }

    public function salvar_curso(Request $request) {
         Curso::create($request->all());
         $professores = $this->_professores();
         return view('cad_cursos', compact('professores'));
    }

    private function _professores() {
        return User::where('grupo','=', 'professor-admin')
        ->orwhere('grupo','=', 'professor')
        ->get();
    }
}
