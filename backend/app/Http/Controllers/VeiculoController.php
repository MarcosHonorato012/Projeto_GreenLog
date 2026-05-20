<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::all();

        return view('veiculos.index',
            compact('veiculos'));
    }

    public function create()
    {
        return redirect('/veiculos');
    }

    public function store(Request $request)
    {
        Veiculo::create([

            'novo_veiculo' => 'Veículo',

            'modelo' => $request->modelo,

            'marca' => $request->marca,

            'placa' => $request->placa,

            'ano' => $request->ano,

            'estado' => $request->estado,

            'observacao' => $request->observacao

        ]);

        return redirect('/veiculos');
    }

    public function show($id)
    {
        return redirect('/veiculos');
    }

    public function edit($id)
    {
        return redirect('/veiculos');
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);

        $veiculo->update([

            'novo_veiculo' => 'Veículo',

            'modelo' => $request->modelo,

            'marca' => $request->marca,

            'placa' => $request->placa,

            'ano' => $request->ano,

            'estado' => $request->estado,

            'observacao' => $request->observacao

        ]);

        return redirect('/veiculos');
    }

    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);

        $veiculo->delete();

        return redirect('/veiculos');
    }
}
