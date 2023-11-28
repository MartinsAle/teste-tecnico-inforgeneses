@extends('layouts.app', ["current" => "home"])
@section('body')
    <div class="row">
        <h1>Ooops... Página não encontrada!</h1>
        <p>Não foi possível executar a ação que você tentou. Talvez alguns dos links a seguir possa lhe ser útil:</p>
        <div class="col-sm-6">
            <a href="{{ route('cadastrar') }}" class="btn btn-sm btn-primary">Cadastrar nova tarefa</a>
            <a href="{{ route('tarefas') }}" class="btn btn-sm btn-primary">Ver tarefa cadastradas</a>
        </div>
    </div>
@endsection
