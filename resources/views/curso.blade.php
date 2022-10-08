@extends('layouts.app')
@include('layouts.partials.menu')
@section('menu_lateral')
<style>
    .content {
        padding-top: 20px;
        padding-left: 35px;
        padding-right: 35px;
        width: 100%;
    }
    .links {
        margin-top: 20px;
    }
    .comentarios {
        margin-top: 20px;
        background-color: red;
        width: 100%;
    }
    .comentarios_content {
        margin: 10px 0 20px 0;
    }
</style>
<nav>
        <h3 class="course_title">{{$curso[0]->nome}}</h3>

        @foreach($curso as $cursos_detalhe)

            <!-- Módulo -->
            @foreach($cursos_detalhe->modulos_exibir as $modulos)
                <div class="module">
                <h4 class="module_title">{{ $modulos->nome }}</h4>
                <ul class="module_list">
                  <!-- Aulas-->
                    @foreach($modulos->aulas_exibir as $aulas)
                    <li><a href="#">{{ $aulas->nome }}</a></li>
                    @endforeach
                </ul>
                </div>
            @endforeach
        @endforeach
</nav>
@endsection

@section('conteudo')
 <div class="content">
    <h2>Aula 1</h2>
    <div id="video_youtube">
        <iframe width="800" height="500"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>   
    </div>

    <div class="links">
        <h3>Links de Apoio</h3>
        <ul>
            <li>teste1</li>
            <li>teste2</li>
            <li>teste3</li>
            <li>teste4</li>
        </ul>
    </div>

    <div class="comentarios">
        <div class="comentarios_top">
            <span>E-mail: teste@teste.com.br</span>
            <span>Data: 01/10/2022</span>
        </div>
        <div class="comentarios_content">
            <p>sasokopakopskopakpskopkaopsopas</p>
        </div>
    </div>

    <div class="comentar">
        <textarea>
            saasasasasasasas
        </textarea>
    </div>
</div>
@endsection


