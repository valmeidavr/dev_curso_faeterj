@inject('carbon', 'Carbon\Carbon')
@foreach($comentarios as $comentario)
    <div class='card'>
        <h6 class='card-header'>
            {{$comentario->aluno_exibir->email}}
            -
            {{ $carbon::parse($comentario->created_at)->format('d/m/Y') }}
        </h6>
        <div class='card-body'>
            <p class='card-text'>{{ $comentario->descricao }}</p>
        </div>
    </div>
    <br>
@endforeach