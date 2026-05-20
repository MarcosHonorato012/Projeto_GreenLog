<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;
use Illuminate\Support\Facades\Hash;

class UserrController extends Controller
{
    public function index()
    {
        $userrs = Userr::all();

        return view('userrs.index', compact('userrs'));
    }

    public function create()
    {
        return view('userrs.create');
    }

    public function store(Request $request)
    {
        Userr::create([

            'nome' => $request->nome,
            'email' => $request->email,

            'senha' => Hash::make($request->senha),

            'cpf' => $request->cpf,
            'telefone' => $request->telefone

        ]);

        return redirect('/userrs');
    }

    public function edit($id)
    {
        $userr = Userr::findOrFail($id);

        return view('userrs.edit', compact('userr'));
    }

    public function update(Request $request, $id)
    {
        $userr = Userr::findOrFail($id);

        $userr->update([

            'nome' => $request->nome,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone

        ]);

        return redirect('/userrs');
    }

    public function destroy($id)
    {
        $userr = Userr::findOrFail($id);

        $userr->delete();

        return redirect('/userrs');
    }
}
