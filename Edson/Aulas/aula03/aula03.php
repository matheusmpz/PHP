<?php
    $nome = "Matheus";
    $idade_user = 17;
    $altura = 1.67;

    echo "Nome $nome <br>";
    echo "Idade $idade_user <br>";
    echo "Altura $altura <br>";
    echo "<hr>";

    // Estrutura condicional
    echo "<h3>Estrutura condicional simples, if and else</h3>";

    $idade = 18;

    if ($idade >= 16) {
         echo "Pode Votar! <br>";
    } else {
         echo "Não Pode votar! <br>";
    }
    echo "<hr>";
    // Verificar se é maior ou menor de idade
    echo "<h3>Verificar idade</h3>";

    $pessoaIdade = 19;

    if ($pessoaIdade >= 18) {
        echo "Maior de idade! <br>";
    } else {
        echo "Menor de idade! <br>";
    }
    // Verificar se é menor de idade, adulto ou idoso

    if ($pessoaIdade < 18) {
        echo "Criança!";
    } else if ($pessoaIdade >= 18 && $pessoaIdade < 60) {
        echo "Adulto";
    } else if ($pessoaIdade >= 60) {
        echo "Você é um idoso!";
    }
    echo "<hr>";

    // Qual a cor preferida
    echo "<h3>Verificação com switch</h3>";
    $cor = "blue";

    switch ($cor) {
        case "red":
            echo "Cor vermelho ser minha favorita";
            break;
        case "blue":
            echo "Cor azul ser minha favorita";
            break;
        default:
        echo "Nem uma cor foi selecionada";
    }
    echo "<hr>";

    // Laços de repetição
    // Imprima na tela os números de um 1 à 5
    echo "<h3>Com while</h3>";
    $contador = 1;

    while ($contador <= 5) {
        echo $contador . "<br>";
        $contador++;
    }

    echo "<hr>";
    echo "<h3>Com for</h3>";

    for ($contagem = 6; $contagem <= 10; $contagem++) {
        echo $contagem . "<br>";
    }

    // Função
    echo "<hr>";
    echo "<h3>Função</h3>";

    function saudacao($nome) {
        echo "Olá " . $nome . ", bem vindo!";
    }
    saudacao("Matheus")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - PHP</title>
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