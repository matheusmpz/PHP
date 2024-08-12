<?php
// Função 2 
// Leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro).
// Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas,
// informar o seu nome, o salário fixo e salário no final do mês.

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];

    $comissao = $salario * 0.15;
    $newsalario = $salario + $comissao;

    echo $nome . ', você recebeu R$' . $salario . ' esse mês, e teve um adicional de 15% por suas vendas ficando com: R$' . $newsalario;
?>