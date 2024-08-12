<?php
// Atividade 1: Crie uma formulário que capture os dados do nome, idade e cidade natal, e exiba os valores em um outro aquivo PHP.

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01 - PHP</title>
    <style>
        body {
            padding: 24px;
            color: #2f2f2f;
            font-family: sans-serif;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 400px;
        }
        form button {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Preencha as informações!</h1>
    <form action="ex01.1.php" method="post">
        <label for="nome"> Nome:
            <input type="text" id="nome" name="nome" placeholder="Nome...">
        </label>
        <label for="nome"> Idade:
            <input type="text" id="idade" name="idade" placeholder="Idade...">
        </label>
        <label for="nome"> Cidade Natal:
            <input type="text" id="city" name="city" placeholder="Cidade...">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>