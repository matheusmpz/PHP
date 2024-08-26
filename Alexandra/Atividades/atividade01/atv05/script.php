<?php
// Função 5
// Solicitar ao usuário que insira sua idade
// Se a idade inserida é um número inteiro positivo válido. Caso contrário, exibir uma mensagem de erro.
// Verificar se a idade inserida indica que a pessoa é maior de idade ou menor de idade
// Exibir uma mensagem indicando se a pessoa é maior de idade ou menor de idade.

    $numero = $_POST['num'];

    if (is_numeric($numero)) {
        echo "$numero é um número inteiro.";
    } else {
        echo "$numero não é um número inteiro.";
    }

    if ($numero < 18) {
        echo "Menor de idade!";
    } else {
        echo "Maior de idade!";
    }
?>