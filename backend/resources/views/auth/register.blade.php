<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Criar Conta</title>

    <link rel="stylesheet"
          href="{{ asset('css/criarconta.css') }}">

</head>

<body>

<main class="container">

    <main>

        <h1>
            Criar Conta
        </h1>

        <form action="{{ route('register.store') }}"
              method="POST">

            @csrf

            <div class="nome">

                <input type="text"
                       name="nome"
                       placeholder="Nome"
                       required>

            </div>

            <div class="email">

                <input type="email"
                       name="email"
                       placeholder="Email"
                       required>

            </div>

            <div class="senha">

                <input type="password"
                       name="senha"
                       placeholder="Senha"
                       required>

            </div>

            <div class="telefone">

                <input type="text"
                       name="telefone"
                       placeholder="Telefone"
                       required>

            </div>

            <div class="cpf">

                <input type="text"
                       name="cpf"
                       placeholder="CPF"
                       required>

            </div>

            <button type="submit">

                Criar Conta

            </button>

        </form>

    </main>

    <div class="links">

        <a href="/">
            Voltar
        </a>

        <a href="/login">
            Entrar
        </a>

    </div>

</main>

</body>

</html>
