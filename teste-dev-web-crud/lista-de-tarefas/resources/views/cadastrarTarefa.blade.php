@extends('layouts.app', ['current' => 'nova-tarefa'])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('cadastrarTarefa') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título da tarefa</label>
                    <input type="text" class="form-control {{$errors->has('titulo') ? 'is-invalid' : ''}} validate-message" name="titulo" id="titulo" placeholder="Exemplo: Fazer compras">
                    @if ($errors->has('titulo'))
                        <div class="invalid-feedback">
                            {{$errors->first('titulo')}}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição da tarefa</label>
                    <textarea class="form-control validate-message {{$errors->has('descricao') ? 'is-invalid' : ''}}" id="descricao" name="descricao" rows="3"></textarea>
                    @if ($errors->has('descricao'))
                        <div class="invalid-feedback">
                            {{$errors->first('descricao')}}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Limpar</button>
            </form>
        </div>
    </div>
@endsection
