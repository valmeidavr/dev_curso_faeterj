@extends('layouts.app')
@section('usuario', 'Vinicius Almeida')
@section('menu_principal')
    <li><a href="/">Home</a></li>
    <li  class="isActive"><a href="/cursos">Cursos</a></li>
    <li><a href="/contato">Contato</a></li>
@endsection
@section('conteudo')
        Lista de Cursos
@endsection
