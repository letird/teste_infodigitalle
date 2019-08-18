<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public $timestamps = false;
    public $fillable = [ "nome", "cpf", "rua", "nrCasa", "bairro", "cidade", "estado","cep", "email", "telefone"];
}