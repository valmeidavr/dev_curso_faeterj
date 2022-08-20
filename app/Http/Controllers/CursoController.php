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
        $curso = Curso::where('id', '=', $id)->get();

  /*       $curso = DB::select("select * from cursos where id =?", [$id]); */
        return view('curso', compact('curso'));
    }
}
