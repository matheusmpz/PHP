<?php
// Atividade 8: Crie uma string com seu nome completo e use funções de manipulação de strings para exibir o nome em letras maiúsculas, minúsculas e apenas a primeira letra de cada palavra em maiúsculas.

    $nome = "Matheus Pereira Soares";

    // Exibe o nome em letras maiúsculas
    $nome_maiusculas = strtoupper($nome);
    echo "Nome em maiúsculas: " . $nome_maiusculas . "<br>";

    // Exibe o nome em letras minúsculas
    $nome_minusculas = strtolower($nome);
    echo "Nome em minúsculas: " . $nome . "<br>";

    // Exibe apenas a primeira letra de cada palavra em maiúsculas
    $nome_primeiras_maiusculas = ucwords(strtolower($nome));
    echo "Nome com as primeiras letras maiúsculas: " . $nome_primeiras_maiusculas . "<br>";
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