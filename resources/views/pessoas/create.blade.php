@extends('layout')

@section('titulo-head')
    Cadastro
@endsection

@section('header-titulo')
    Cadastro de Pessoas
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
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome">
            </div>
            <div class="form-group col-sm-3">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Seu CPF">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-9">
                <label for="rua">Rua:</label>
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua de residência">
            </div>
            <div class="form-group col-sm-3">
                <label for="nrCasa">Número da casa:</label>
                <input type="number" class="form-control" id="nrCasa" name="nrCasa" placeholder="Número da casa">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-3">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro de residência">
            </div>
            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade de residência">
            </div>
            <div class="form-group col-sm-3">
                <label for="estado">Estado:</label>
                <select class="form-control" name="estado" id="estado">
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="ap">Amapá</option>
                    <option value="am">Amazonas</option>
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="ro">Rondônia</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="sp">São Paulo</option>
                    <option value="se">Sergipe</option>
                    <option value="to">Tocantins</option>
                </select>
            </div>
            <div class="form-group col-sm-3">
                <label for="cep">Cep:</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="Cep de residência">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail">
            </div>
            <div class="form-group col-sm-6">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" name="telefone" id="telefone"
                       placeholder="Seu número de telefone com DDD">
            </div>
        </div>
        <div class="actions" style="float: right">
            <a style="background-color: lightskyblue;" class="btn btn-xs" href="{{ route('listar_pessoas') }}"><i class="fas fa-times"></i>Cancelar</a>
            <button style="background-color: lightskyblue;" class="btn btn-xs"><i class="fas fa-check"></i>Salvar
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