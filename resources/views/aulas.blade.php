@extends('layouts.app')

@section('usuario', 'Vinicius Almeida')

@section('menu_principal')
    <li ><a href="/">Home</a></li>
    <li class="isActive" ><a href="/cursos">Cursos</a></li>
    <li><a href="/contato">Contato</a></li>
@endsection
@section('menu_lateral')
<nav>
    <h3 class="course_title">CURSO PROGRAMAÇÃO PHP</h3>

    <div class="module">
      <h4 class="module_title">Módulo 01</h4>

      <ul class="module_list">
        <li>
          <a href="#">Introdução</a>
        </li>
        <li>
          <a href="#">Instalação dos aplicativos</a>
        </li>
        <li>
          <a href="#">CONFIGURAÇÃO DO VSCODE</a>
        </li>
      </ul>
    </div>

    <div class="module">
      <h4 class="module_title">Modulo 02</h4>

      <ul class="module_list">
        <li>
          <a href="#">Variáveis</a>
        </li>
        <li>
          <a href="#">Laços de repetição</a>
        </li>
        <li>
          <a href="#">Funções</a>
        </li>
      </ul>
    </div>

    <div class="module">
      <h4 class="module_title">Módulo 01</h4>

      <ul class="module_list">
        <li>
          <a href="#">Introdução</a>
        </li>
        <li>
          <a href="#">Instalação dos aplicativos</a>
        </li>
        <li>
          <a href="#">CONFIGURAÇÃO DO VSCODE</a>
        </li>
      </ul>
    </div>

    <div class="module">
      <h4 class="module_title">Modulo 02</h4>

      <ul class="module_list">
        <li>
          <a href="#">Variáveis</a>
        </li>
        <li>
          <a href="#">Laços de repetição</a>
        </li>
        <li>
          <a href="#">Funções</a>
        </li>
      </ul>
    </div>
  </nav>
@endsection
@section('conteudo')
        Testando
@endsection
