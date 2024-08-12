<?php
// Atividade 2:  Declare uma variável para a idade e use estruturas condicionais para verificar se a pessoa é menor de idade, adulta ou idosa, exibindo uma mensagem apropriada.

    $idade = 19   ; 

    if ($idade < 18) {
        echo "Você é uma Criança!";
    } else if ($idade >= 18 && $idade < 60) {
        echo "Você é um Adulto!";
    } else if ($idade >= 60) {
        echo "Você é um idoso!";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividae 02 - PHP</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 24px;
            color: #2f2f2f;
        }
    </style>
</head>
<body>

</body>
</html>