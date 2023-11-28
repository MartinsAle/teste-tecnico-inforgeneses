@extends('layouts.app', ['current' => 'tarefas'])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('atualizarTarefa', [$tarefa->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título da tarefa</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{$tarefa->titulo}}" placeholder="Exemplo: Fazer compras">
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição da tarefa</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3">{{$tarefa->descricao}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Limpar</button>
            </form>
        </div>
    </div>
@endsection
