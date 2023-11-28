@extends('layouts.app', ['current' => 'tarefas'])
@section('body')
    <div class="row">
        <div class="card border border-secondary">
            <div class="card-body">
                <h5 class="card-title">Tarefas cadastradas</h5>
                @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                @if (count($tarefas) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tarefas as $trf)
                            <tr>
                                <td>{{ $trf->titulo }}</td>
                                <td>{{ Str::limit($trf->descricao, 50)}}</td>
                                <td><a href="{{ route('editarTarefa', $trf->id) }}" class="btn btn-sm btn-primary">Editar</a> <a href="{{ route('excluir', $trf->id) }}" class="btn btn-sm btn-danger">Excluir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{$tarefas->links()}}
                </div>
                @else
                <h5>Não há tarefas cadastradas</h5>
                @endif
            </div>
            <div class="card-footer">
                <a href="{{ route('cadastrar') }}" class="btn btn-sm btn-primary">Nova tarefa</a>
            </div>
        </div>
    </div>
@endsection
