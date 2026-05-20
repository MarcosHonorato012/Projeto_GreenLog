<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $table = 'viagems';

    protected $fillable = [

        'userr_id',
        'veiculo_id',
        'nova_viagem',
        'lista_viagem',
        'data_criacao',
        'distancia_km',
        'partida',
        'destino',
        'observacao',
        'conclusao'

    ];

    public function userr()
    {
        return $this->belongsTo(Userr::class);
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
