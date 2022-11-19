@inject('carbon', 'Carbon\Carbon')
@foreach($comentarios as $comentario)
    <div class='card' id="card-{{$comentario->id}}">
        <div class='card-header d-flex justify-content-between'>
            <h6> 
                {{$comentario->aluno_exibir->email}}
                -
                {{ $carbon::parse($comentario->created_at)->format('d/m/Y') }}
            </h6>
            <i onclick="excluir({{$comentario->id}})" style="cursor:pointer;" class="fas fa-trash"></i>
        </div>
        
        <div class='card-body'>
            <p class='card-text'>{{ $comentario->descricao }}</p>
        </div>
    </div>
    <br>
@endforeach