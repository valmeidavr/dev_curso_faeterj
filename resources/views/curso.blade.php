@extends('layouts.paginas')
@include('layouts.partials.menu')

@section('conteudo')
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-lg-3 col-12" style="background-color: rgb(218, 218, 218); padding: 30px;">
            <nav>
                <h4 class="course_title">{{$curso[0]->nome}}</h4>
        
                @foreach($curso as $cursos_detalhe)
        
                    <!-- Módulo -->
                    @foreach($cursos_detalhe->modulos_exibir as $modulos)
                        <div class="module">
                            <h5 class="module_title">{{ $modulos->nome }}</h5>
                            <ul class="module_list">
                            <!-- Aulas-->
                                @foreach($modulos->aulas_exibir as $aulas)
                                <li><a href="#">{{ $aulas->nome }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <br><br>
                    @endforeach
                @endforeach
            </nav>
        </div>
        
        <div class="col-lg-9 col-12" style="background-color: rgb(232, 232, 255);">
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
                        <br><br>
                    </div>
        
                   {{--  <div class="comentarios">
                        <div class="comentarios_top">
                            <span>E-mail: teste@teste.com.br</span>
                            <span>Data: 01/10/2022</span>
                        </div>
                        <div class="comentarios_content">
                            <p>sasokopakopskopakpskopkaopsopas</p>
                        </div>
                    </div> --}}

                    <div class="card">
                        <h6 class="card-header">01/10/2022 - teste@teste.com.br</h6>
                        <div class="card-body">
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    

                    <form method="POST" action="{{route('comentar')}}" class="mt-4">
                        <div class="form-row">
                          <div class="col-12">
                            <h6 for="Comentario">Comentário</h6>
                            <textarea class="form-control" name="comentario" rows="5"></textarea>
                          </div>
                        </div>
                        <button type="submit" class="mt-2 btn btn-primary mb-2">Comentar</button>
                      </form>




    
                </div>
            @else
                Nenhuma aula cadastrada!   
            @endif 
        </div>
    </div>
</div>
  
@endsection


