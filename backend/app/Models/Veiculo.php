<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Viagem;

class Veiculo extends Model
{
    protected $table = 'veiculos';

    protected $fillable = [

        'novo_veiculo',
        'modelo',
        'marca',
        'placa',
        'ano',
        'estado',
        'observacao'

    ];

    public function viagens()
    {
        return $this->hasMany(Viagem::class);
    }
}
