<?php
// Função 3
// Ler dois valores para as variáveis A e B,
// efetuar as trocas dos valores de forma que a variável A passe a possuir o valor da variável B e a variável B passe a possuir o valor da variável A.
// Apresentar os valores trocados.

    $A = $_POST['valor01'];
    $B = $_POST['valor02'];

    $temp = $A; //Armazenando o valor de A
    $A = $B;
    $B = $temp;

    echo "Valor de A: " . $A . "valor de B: " . $B;
?>
