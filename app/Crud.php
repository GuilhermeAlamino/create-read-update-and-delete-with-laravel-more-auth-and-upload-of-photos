<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
        'imagem', 'nome', 'sobrenome', 'cpf', 'email', 'telefone', 'adress', 'rua'
    ];
}
