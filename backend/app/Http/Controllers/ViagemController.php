<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viagem;
use App\Models\Veiculo;
use App\Models\Userr;

class ViagemController extends Controller
{
    public function index()
    {
        $viagems = Viagem::all();

        $veiculos = Veiculo::all();

        $userrs = Userr::all();

        return view('viagems.index', compact(
            'viagems',
            'veiculos',
            'userrs'
        ));
    }

    public function create()
    {
        $veiculos = Veiculo::all();

        $userrs = Userr::all();

        return view('viagems.create', compact(
            'veiculos',
            'userrs'
        ));
    }

    public function store(Request $request)
    {
        Viagem::create([

            'veiculo_id' => $request->veiculo_id,

            'userr_id' => $request->userr_id,

            'nova_viagem' => 'Nova Viagem',

            'lista_viagem' => 'Lista',

            'data_criacao' => $request->data_criacao,

            'partida' => $request->partida,

            'destino' => $request->destino,

            'distancia_km' => $request->distancia_km,

            'conclusao' => $request->conclusao,

            'observacao' => $request->observacao

        ]);

        return redirect()->route('viagems.index');
    }
}
