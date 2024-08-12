<?php
// Função 4
// Solicitar ao usuário que insira um número inteiro, Caso contrário, exibir uma mensagem de erro.
// verificar se o número inserido é par ou ímpar
// exibir uma mensagem indicando o resultado, se o número é par ou ímpar.
// Além disso, o programa deve continuar a solicitar ao usuário que insira um número até que um número inteiro válido seja fornecido.

    $numero = $_POST['num'];
    
    if (is_numeric($numero)) {
        echo "$numero é um número inteiro.";
    } else {
        echo "$numero não é um número inteiro.";
    }

    if ($numero % 2 === 0) {
        echo $numero . " é um número par";
    } else {
        echo $numero . " é um número ímpar";
    }
?>