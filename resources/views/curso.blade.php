@extends('layouts.app')
@include('layouts.partials.menu')
@section('conteudo')
  Minhas aulas
@endsection('conteudo')

@section('menu_lateral')
<nav>
        @foreach($curso as $cursos_detalhe)
            @foreach($cursos_detalhe->modulos_exibir as $modulos)
                    <p>{{ $modulos->nome }}</p>
                    <ul class="module_list">
                        @foreach($modulos->aulas_exibir as $aulas)
                                <li>{{ $aulas->nome }}</li>
                        @endforeach
                    </ul>
            @endforeach
        @endforeach

        <h3 class="course_title"></h3>

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
