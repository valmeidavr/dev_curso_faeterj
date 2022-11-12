<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Aula;
use App\Modulo;
use App\User;
use App\Comentarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if(!Auth::user()) {
            return redirect('/login');
        }

        $curso = Curso::where('id', '=', $id)->get();
        $modulo = Modulo::where('cursos_id', '=', $id)->first()->id;
        $aula = Aula::where('cursos.id', '=', $id)
                ->where('modulos_id', '=', $modulo)
                ->join('modulos', 'modulos.id', '=', 'aulas.modulos_id')
                ->join('cursos', 'cursos.id', '=', 'modulos.cursos_id')
                ->select('aulas.*')
                ->orderBy('id', 'ASC')
                ->limit(1)
                ->first(); 
        $comentarios = Comentarios::where('aulas_id', '=', 1)->get();
        return view('curso', compact('curso', 'aula', 'comentarios'));
    }
    public function cadastro(){
        $professores = $this->_professores();
        return view('cad_cursos', compact('professores'));
    }
    private function _professores() {
        return User::where('grupo','=', 'professor-admin')
        ->orwhere('grupo','=', 'professor')
        ->get();
    }   
    public function salvar_curso(Request $request) {
         Curso::create($request->all());
         $professores = $this->_professores();
         return view('cad_cursos', compact('professores'));
    }
    private function _cursos() {
        return Curso::all();
    }
    
    private function _modulos($id) {
        return Modulo::where('cursos_id', '=', $id)->get();
    }

    public function cadastro_modulos(){
        $cursos = $this->_cursos();
        return view('cad_modulos', compact('cursos'));
    }
    public function salvar_modulo(Request $request) {
        Modulo::create($request->all());
        return redirect('/cadastro/modulos')->with('success', 'Seu modulo foi criado com sucesso.');
   }
    public function cadastro_aulas(){
        $cursos = $this->_cursos();
        return view('cad_aulas', compact('cursos'));
    }
    public function salvar_aula(Request $request) {
        Aula::create($request->all());
        return redirect('/cadastro/aulas')->with('success', 'Sua aula foi criada com sucesso.');
    }
 
    public function preencherSub(Request $request){
        $modulo = Modulo::where('cursos_id', '=', $request->cursos_id)->get();
        
    if (count($modulo) > 0) {
        return response()->json($modulo);
    }
    }
    
}

