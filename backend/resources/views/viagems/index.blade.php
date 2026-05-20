<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Registro de Viagem</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="{{ asset('css/siteregistro.css') }}">

</head>

<body>

<main class="container">

    <form action="{{ route('viagems.store') }}"
          method="POST">

        @csrf

        <h1>
            Registro de Viagem
        </h1>

        <div class="veiculo">

            <select name="veiculo_id"
                    required>

                <option value="">
                    Selecione o veículo
                </option>

                @foreach($veiculos as $veiculo)

                    <option value="{{ $veiculo->id }}">

                        {{ $veiculo->marca }} -
                        {{ $veiculo->modelo }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="usuario">

            <select name="userr_id"
                    required>

                <option value="">
                    Selecione o usuário
                </option>

                @foreach($userrs as $userr)

                    <option value="{{ $userr->id }}">

                        {{ $userr->nome }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="data">

            <input type="date"
                   name="data_criacao"
                   required>

        </div>

        <div class="origem">

            <input placeholder="Origem"
                   type="text"
                   name="partida"
                   required>

        </div>

        <div class="destino">

            <input placeholder="Destino"
                   type="text"
                   name="destino"
                   required>

        </div>

        <div class="status">

            <input placeholder="Status"
                   type="text"
                   name="conclusao">

        </div>

        <div class="distancia">

            <input placeholder="Distância KM"
                   type="number"
                   name="distancia_km"
                   required>

        </div>

        <div class="observacao">

            <textarea name="observacao"
                      placeholder="Observação"></textarea>

        </div>

        <button type="submit">

            Registrar

        </button>

        <a href="/">
            Voltar para o site
        </a>

    </form>

</main>

</body>

</html>
