<?php
// Função 8
// Leia o custo de fábrica de um carro e informe o custo ao consumidor.
// O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o resultado). 
// Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%).

    $custo = $_POST['valor'];
    $distribuidor = 28/100;
    $impostos = 45/100;

    $valor = $custo + ($custo * $distribuidor) + ($impostos * $custo);
    
    echo "O valor do carro é de: R$" . $valor;
?>