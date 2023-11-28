@extends('layouts.app', ["current" => "home"])
@section('body')
    <div class="row">
        <div class="col-sm-6">
            <div class="card border border-secondary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de tarefas</h5>
                    <p class="card-text">Clique no botão abaixo para cadastrar suas tarefas.</p>
                    <a href="{{ route('cadastrar') }}" class="btn btn-primary">Cadastrar tarefa</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border border-secondary">
                <div class="card-body">
                    <h5 class="card-title">Listar tarefas</h5>
                    <p class="card-text">Clique no botão abaixo para listar suas tarefas.</p>
                    <a href="{{ route('tarefas') }}" class="btn btn-primary">Listar tarefas</a>
                </div>
            </div>
        </div>
    </div>
@endsection
