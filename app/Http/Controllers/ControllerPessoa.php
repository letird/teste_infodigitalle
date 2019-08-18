<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoasFromRequest;
use App\Pessoa;
use Illuminate\Http\Request;

class ControllerPessoa extends Controller
{
    public function inicio()
    {
        return redirect()->route('listar_pessoas');
    }
    public function index(Request $request) {
        $pessoas = Pessoa::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('pessoas.index', compact('pessoas', 'mensagem'));
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(PessoasFromRequest $request)
    {
        $nome       = $request->nome;
        $cpf        = $request->cpf;
        $rua        = $request->rua;
        $nrCasa     = $request->nrCasa;
        $bairro     = $request->bairro;
        $cidade     = $request->cidade;
        $estado     = $request->estado;
        $cep        = $request->cep;
        $email      = $request->email;
        $telefone   = $request->telefone;

        Pessoa::create([
            "nome"     => $nome,
            "cpf"      => $cpf,
            "rua"      => $rua,
            "nrCasa"   => $nrCasa,
            "bairro"   => $bairro,
            "cidade"   => $cidade,
            "estado"   => $estado,
            "cep"      => $cep,
            "email"    => $email,
            "telefone" => $telefone
        ]);

        $request->session()->flash('mensagem', 'Pessoa cadastrada com sucesso!');

        return redirect()->route('listar_pessoas');
    }

    public function destroy(Request $request) {
        Pessoa::destroy($request->id);
        $request->session()->flash('mensagem', 'Pessoa removida com sucesso!');
        return redirect()->route('listar_pessoas');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $pessoa = Pessoa::find($id);
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(PessoasFromRequest $request)
    {
        $id = $request->id;
        $pessoa = Pessoa::find($id);

        $pessoa->nome       = $request->nome;
        $pessoa->cidade     = $request->cidade;
        $pessoa->cpf        = $request->cpf;
        $pessoa->rua        = $request->rua;
        $pessoa->nrCasa     = $request->nrCasa;
        $pessoa->bairro     = $request->bairro;
        $pessoa->estado     = $request->estado;
        $pessoa->cep        = $request->cep;
        $pessoa->email      = $request->email;
        $pessoa->telefone   = $request->telefone;

        $pessoa->save();

        $request->session()->flash('mensagem', 'Pessoa alterada com sucesso!');

        return redirect()->route('listar_pessoas');
    }

    public function view(Request $request)
    {
        $id = $request->id;
        $pessoa = Pessoa::find($id);
        return view('pessoas.view', compact('pessoa'));
    }
}