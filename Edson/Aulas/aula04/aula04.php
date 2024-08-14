<?php


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Sora',sans-serif;
            padding: 24px;
            color: #2f2f2f;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #content {
            display: flex;
            flex-direction: column;
            width: 420px;
            gap: 12px;
            border: 1px solid #2f2f2f;
            border-radius: 6px;
            padding: 32px;
        }
        #content input {
            border: none;
            border-radius: 4px;
            background: #2f2f2f;
            padding: 8px 8px;
            color: #eeeeee;
        }
        #content input::placeholder {
            color: #eeeeee;
        }
        #content button {
            border: none;
            background: #F6DC04;
            color: #2f2f2f;
            width: 200px;
            cursor: pointer;
            padding: 8px 8px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- GET = Filtros, pesquisa -->
    <!-- POST = Coleta de dados do usuário -->
    <form action="autenticacao.php" method="post">
        <section id="content">
            <h1>Login</h1>
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Seu melhor email...">
                <label for="password">Senha</label>
                    <input type="password" name="senha" id="password" placeholder="Digite uma senha...">
                <div><input type="checkbox" name="lembrame" id="check" value="lembrame">
                <label for="check">Lembrar-me</label></div>

                <button type="submit">Entrar</button>
        </section>
    </form>
</body>
</html>