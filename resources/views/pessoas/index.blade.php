@extends('layout')

@section('titulo-head')
Lista
@endsection

@section('header-titulo')
Pessoas Cadastradas
@endsection

@section('conteudo')
<div class="row">
    <div class="col-sm-4">
        <a class="btn btn-info mb-2" href="{{ route('criar_pessoa') }}">Inserir</a>
    </div>

    @if(!empty($mensagem))
        <div class="alert alert-success">
            <label>{{ $mensagem }}</label>
        </div>
    @endif
</div>
<div id="list" class="row">
    <div class="table-responsive col-sm-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th class="actions">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->cpf }}</td>
                    <td class="actions">
                        <form method="get" action="/pessoas/view/{{$pessoa->id}}">
                            @csrf
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>
                        </form>
                        <form method="get" action="/pessoas/edit/{{$pessoa->id}}">
                            @csrf
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                        </form>
                        <form method="post" action="/pessoas/{{$pessoa->id}}"
                            onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($pessoa->nome)}}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection