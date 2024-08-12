<?php
// Função 7
// leia o preço de custo de um produto
// leia percentual de acréscimo pra venda;
// calcule o valor da venda, considerando que o valor da venda será o preciso de custo acrescido do percentual informado pelo usuário

    $custo = $_POST['valor'];
    $acrescimo = $_POST['add'];

    $percentual = $custo * ($acrescimo / 100);
    $venda = $custo + $percentual;

    echo 'O valor de venda foi de: R$' . $venda;

?>