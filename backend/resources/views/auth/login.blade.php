<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet"
          href="{{ asset('css/login.css') }}">

</head>

<body>

<main class="container">

    <main>

        <h1>
            Entrar na conta
        </h1>

        @if(session('erro'))

            <p>
                {{ session('erro') }}
            </p>

        @endif

        <form action="/login"
              method="POST">

            @csrf

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

            <button type="submit">

                Entrar

            </button>

        </form>

    </main>

    <div class="links">

        <a href="/">
            Voltar
        </a>

        <a href="/register">
            Criar Conta
        </a>

    </div>

</main>

</body>

</html>
