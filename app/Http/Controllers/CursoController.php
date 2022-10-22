<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Aula;
use App\User;
use Illuminate\Http\Request;
use DB;

class CursoController extends Controller
{
    public function index() {
        $cursos = Curso::paginate(4);
        return view('cursos', compact('cursos'));

    }

    public function pesquisar_curso(Request $request) {
        $nome = trim($request->nome);
        $cursos = Curso::where('nome', 'like', "%${nome}%")->paginate(4);
        return view('cursos', compact('cursos'));
    }

    public function show_cursos($id) { 
        $curso = Curso::where('id', '=', $id)->get();
        $aula = Aula::where('modulos_id', '=', '1')
                ->where('cursos.id', '=', $id)
                ->join('modulos', 'modulos.id', '=', 'aulas.modulos_id')
                ->join('cursos', 'cursos.id', '=', 'modulos.cursos_id')
                ->select('aulas.*')
                ->orderBy('id', 'ASC')
                ->limit(1)
                ->first(); 
        return view('curso', compact('curso', 'aula'));
    }
    public function cadastro(){
        $professores = $this->professores();
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
