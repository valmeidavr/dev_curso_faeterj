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

@if(!empty($aula))
    <div class="content">
        <h2>{{ $aula->nome }}</h2>
        <div id="video_youtube">
            <iframe width="800" height="500"
                src="https://www.youtube.com/embed/{{ $aula->video }}">
            </iframe>   
        </div>

        <div class="links">
            <h3>Links de Apoio</h3>
            <ul>
                @foreach($aula->anexos_exibir as $anexos)
                <li><a href="{{$anexos->link}}">{{ $anexos->nome }}</a></li>
                @endforeach
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

        <form method="POST" action="{{route('comentar')}}">
            @csrf
            <div class="comentar">
                <textarea name="comentario">
                    saasasasasasasas
                </textarea>
                <input type="hidden" name="aula_id" value="{{ $aula->id }}"/>
            </div>
            <button type="submit">Comentar</button>
        </form>
    </div>
@else
    Nenhuma aula cadastrada!   
@endif
@endsection


