<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Veículos</title>

    <link rel="stylesheet"
          href="{{ asset('css/style_veiculos.css') }}">

</head>

<body>

<header class="header">

    <div class="logo-area">

        <img src="{{ asset('img/globo_do_login.png') }}">

    </div>

    <nav class="menu">

        <a href="/"
           class="link-externo">

            ← Voltar

        </a>

    </nav>

</header>

<main class="main">

    <div class="box">

        <h2>Cadastro de Veículo</h2>

        <form action="{{ route('veiculos.store') }}"
              method="POST">

            @csrf

            <div class="campo">

                <label>Placa</label>

                <input type="text"
                       name="placa"
                       required>

            </div>

            <div class="campo">

                <label>Marca</label>

                <input type="text"
                       name="marca"
                       required>

            </div>

            <div class="campo">

                <label>Modelo</label>

                <input type="text"
                       name="modelo"
                       required>

            </div>

            <div class="campo">

                <label>Ano</label>

                <input type="number"
                       name="ano"
                       required>

            </div>

            <div class="campo">

                <label>Status</label>

                <select name="estado">

                    <option>Ativo</option>

                    <option>Manutenção</option>

                </select>

            </div>

            <div class="campo largura-total">

                <label>Observação</label>

                <textarea name="observacao"></textarea>

            </div>

            <button type="submit"
                    class="btn-salvar">

                Salvar

            </button>

        </form>

    </div>

    <div class="box">

        <h2>Veículos Cadastrados</h2>

        <table class="tabela-frota">

            <thead>

            <tr>

                <th>Placa</th>

                <th>Marca</th>

                <th>Modelo</th>

                <th>Ano</th>

                <th>Status</th>

            </tr>

            </thead>

            <tbody>

            @foreach($veiculos as $veiculo)

                <tr>

                    <td>{{ $veiculo->placa }}</td>

                    <td>{{ $veiculo->marca }}</td>

                    <td>{{ $veiculo->modelo }}</td>

                    <td>{{ $veiculo->ano }}</td>

                    <td>{{ $veiculo->estado }}</td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</main>

</body>

</html>
