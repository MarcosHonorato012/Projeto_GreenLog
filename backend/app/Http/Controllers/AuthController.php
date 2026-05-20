<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Userr;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {

        $user = Userr::where(
            'email',
            $request->email
        )->first();

        if (!$user) {

            return back()->with(
                'erro',
                'Usuário não encontrado'
            );

        }

        if (!Hash::check(
            $request->senha,
            $user->senha
        )) {

            return back()->with(
                'erro',
                'Senha inválida'
            );

        }

        Session::put(
            'usuario',
            $user->id
        );

        Session::put(
            'usuario_nome',
            $user->nome
        );

        return redirect('/');

    }

    public function register(Request $request)
    {

        $user = Userr::create([

            'nome' => $request->nome,

            'email' => $request->email,

            'senha' => Hash::make(
                $request->senha
            ),

            'cpf' => $request->cpf,

            'telefone' => $request->telefone

        ]);

        Session::put(
            'usuario',
            $user->id
        );

        Session::put(
            'usuario_nome',
            $user->nome
        );

        return redirect('/');

    }

    public function logout()
    {

        Session::flush();

        return redirect('/login');

    }

}
