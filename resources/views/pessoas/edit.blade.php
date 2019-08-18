@extends('layout')

@section('titulo-head')
    Edição
@endsection

@section('header-titulo')
    Editando {{$pessoa->nome}}
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-sm-9">
                <label for="nome">Nome:</label>
                <input type="text" value="{{$pessoa->nome}}" class="form-control" name="nome" id="nome" placeholder="Seu nome">
            </div>
            <div class="form-group col-sm-3">
                <label for="cpf">CPF:</label>
                <input type="text" value="{{$pessoa->cpf}}" class="form-control" name="cpf" id="cpf" placeholder="Seu CPF">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-9">
                <label for="rua">Rua:</label>
                <input type="text" value="{{$pessoa->rua}}" class="form-control" id="rua" name="rua" placeholder="Rua de residência">
            </div>
            <div class="form-group col-sm-3">
                <label for="nrCasa">Número da casa:</label>
                <input type="number" value="{{$pessoa->nrCasa}}" class="form-control" id="nrCasa" name="nrCasa" placeholder="Número da casa">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-3">
                <label for="bairro">Bairro:</label>
                <input type="text" value="{{$pessoa->bairro}}" class="form-control" id="bairro" name="bairro" placeholder="Bairro de residência">
            </div>
            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>
                <input type="text" value="{{$pessoa->cidade}}" class="form-control" id="cidade" name="cidade" placeholder="Cidade de residência">
            </div>
            <div class="form-group col-sm-3">
                <label for="estado">Estado:</label>
                <select class="form-control" name="estado" id="estado">
                    <option @if($pessoa->estado === "ac") selected @endif value="ac">Acre</option>
                    <option @if($pessoa->estado === "al") selected @endif value="al">Alagoas</option>
                    <option @if($pessoa->estado === "ap") selected @endif value="ap">Amapá</option>
                    <option @if($pessoa->estado === "am") selected @endif value="am">Amazonas</option>
                    <option @if($pessoa->estado === "ba") selected @endif value="ba">Bahia</option>
                    <option @if($pessoa->estado === "ce") selected @endif value="ce">Ceará</option>
                    <option @if($pessoa->estado === "df") selected @endif value="df">Distrito Federal</option>
                    <option @if($pessoa->estado === "es") selected @endif value="es">Espírito Santo</option>
                    <option @if($pessoa->estado === "go") selected @endif value="go">Goiás</option>
                    <option @if($pessoa->estado === "ma") selected @endif value="ma">Maranhão</option>
                    <option @if($pessoa->estado === "mt") selected @endif value="mt">Mato Grosso</option>
                    <option @if($pessoa->estado === "ms") selected @endif value="ms">Mato Grosso do Sul</option>
                    <option @if($pessoa->estado === "mg") selected @endif value="mg">Minas Gerais</option>
                    <option @if($pessoa->estado === "pa") selected @endif value="pa">Pará</option>
                    <option @if($pessoa->estado === "pb") selected @endif value="pb">Paraíba</option>
                    <option @if($pessoa->estado === "pr") selected @endif value="pr">Paraná</option>
                    <option @if($pessoa->estado === "pe") selected @endif value="pe">Pernambuco</option>
                    <option @if($pessoa->estado === "pi") selected @endif value="pi">Piauí</option>
                    <option @if($pessoa->estado === "rj") selected @endif value="rj">Rio de Janeiro</option>
                    <option @if($pessoa->estado === "rn") selected @endif value="rn">Rio Grande do Norte</option>
                    <option @if($pessoa->estado === "rs") selected @endif value="rs">Rio Grande do Sul</option>
                    <option @if($pessoa->estado === "ro") selected @endif value="ro">Rondônia</option>
                    <option @if($pessoa->estado === "rr") selected @endif value="rr">Roraima</option>
                    <option @if($pessoa->estado === "sc") selected @endif value="sc">Santa Catarina</option>
                    <option @if($pessoa->estado === "sp") selected @endif value="sp">São Paulo</option>
                    <option @if($pessoa->estado === "se") selected @endif value="se">Sergipe</option>
                    <option @if($pessoa->estado === "to") selected @endif value="to">Tocantins</option>
                </select>
            </div>
            <div class="form-group col-sm-3">
                <label for="cep">Cep:</label>
                <input type="text" value="{{$pessoa->cep}}" class="form-control" name="cep" id="cep" placeholder="Cep de residência">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="email">E-mail:</label>
                <input type="email" value="{{$pessoa->email}}" class="form-control" name="email" id="email" placeholder="Seu e-mail">
            </div>
            <div class="form-group col-sm-6">
                <label for="telefone">Telefone:</label>
                <input type="text" value="{{$pessoa->telefone}}" class="form-control" name="telefone" id="telefone"
                       placeholder="Seu número de telefone com DDD">
            </div>
        </div>
        <div class="actions" style="float: right">
            <a style="background-color: lightskyblue;" class="btn btn-xs" href="{{ route('listar_pessoas') }}"><i class="fas fa-times"></i>Cancelar</a>
            <button style="background-color: lightskyblue;" class="btn btn-xs"><i class="far fa-save"></i>Salvar
            </button>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $('#cpf').mask('999.999.999-99');
            $('#cep').mask('99.999-999');
            $('#telefone').mask('(99) 9 9999-9999');
        });
    </script>
@endsection