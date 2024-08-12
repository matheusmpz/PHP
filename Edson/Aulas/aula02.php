<?php
    $nome = "Claudio Silva";
    $nascimento = "20/08/1998";
    $cpf = "473.215.218-14";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - PHP</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 24px;
            color: #eeeeee;
            background: #2f2f2f;
        }
        #content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20vh;
        }
        #button {
            weight: 110px;
            height: 44px;
            border: none; 
            color: #2f2f2f;
            background: #eeeeee;
            padding: 8px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }
        #button::after {
            background: #4f4f4f;
        }
    </style>
</head>
<body>
    <div id="content">
        <button id="button">Clique aqui</button>
    </div>
    <hr>
    <h1>Ficha do Aluno</h1>
    <p><strong>Nome: </strong> <?= $nome ?></p> <br>
    <p><strong>Data de nascimento:</strong> <?= $nascimento?> </p> <br>
    <p><strong>CPF:</strong> <?= $cpf?> </p> <br>

    <script>
        const btn = document.getElementById('button')

        btn.addEventListener('click', function() {
            alert("Isso é um exemplo em JavaScript")
        })
    </script>
</body>
</html>