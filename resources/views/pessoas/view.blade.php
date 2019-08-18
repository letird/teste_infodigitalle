@extends('layout')

@section('titulo-head')
    Visualizar
@endsection

@section('header-titulo')
    Visualizando {{ $pessoa->nome }}
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-sm-4">
            <a class="btn btn-info mb-2" href="{{ route('listar_pessoas') }}">Voltar</a>
        </div>
    </div>
    <div id="list" class="row">
        <div class="table-responsive col-sm-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td>
                        Nome
                    </td>
                    <td>
                        {{$pessoa->nome}}
                    </td>
                </tr>
                <tr>
                    <td>
                        CPF
                    </td>
                    <td>
                        {{ $pessoa->cpf }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Rua
                    </td>
                    <td>
                        {{$pessoa->rua}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Número da Casa
                    </td>
                    <td>
                        {{$pessoa->nrCasa}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Bairro
                    </td>
                    <td>
                        {{$pessoa->bairro}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Cidade
                    </td>
                    <td>
                        {{ $pessoa->cidade }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Estado
                    </td>
                    <td>
                        {{$pessoa->estado}}
                    </td>
                </tr>
                <tr>
                    <td>
                        CEP
                    </td>
                    <td>
                        {{$pessoa->cep}}
                    </td>
                </tr>
                <tr>
                    <td>
                        E-Mail
                    </td>
                    <td>
                        {{$pessoa->email}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefone
                    </td>
                    <td>
                        {{$pessoa->telefone}}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection