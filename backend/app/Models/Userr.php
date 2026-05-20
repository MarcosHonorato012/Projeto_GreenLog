<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{

    protected $table = 'userrs';

    protected $fillable = [

        'nome',
        'email',
        'senha',
        'cpf',
        'telefone'

    ];

}
