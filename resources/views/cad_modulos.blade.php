@extends('layouts.app')
@section('conteudo')
<body>
    <div class="form_modulos">
        <form style="margin-top: 100px" method="POST" action="{{ route('salvar_modulo') }}">
            @csrf

            <h1 style="text-align: center; font-weight: bold; margin-bottom:50px">Cadastre o modulo</h1>

            @if(session('success'))
              <div class="alert">{{session('success')}}</div>
            @endif

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="details">Curso</label><br>
              <select name="cursos_id" class="form-control" required>

                  <option value="" class="form-control">Selecione...</option>
                    @foreach($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nome}}</option>
                    @endforeach
              </select>
            </div>
              <div class="form-group col-md-6">
                <label class="details">Módulo</label> <br>
                <select name="nome" class="form-control" required>
                  <option value="" class="form-control">Selecione...</option>
                         <option value="Modulo 1">Modulo 1</option>
                         <option value="Modulo 2">Modulo 2</option>
                         <option value="Modulo 3">Modulo 3</option>
                         <option value="Modulo 4">Modulo 4</option>
                         <option value="Modulo 5">Modulo 5</option>
                         <option value="Modulo 6">Modulo 6</option>
                         <option value="Modulo 7">Modulo 7</option>
                </select>
            </div>
          
        </div>
              <button class="form-control btn-primary" type="submit">Salvar</button>
        </form>
    </div>
  </body>
@endsection('conteudo')
@include('layouts.partials.menu')