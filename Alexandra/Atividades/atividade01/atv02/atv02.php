<?php
// Função 2 
// Leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro).
// Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas,
// informar o seu nome, o salário fixo e salário no final do mês.

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função - 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="script.php" id="form" method="post">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome">
        <p></p>
        <label for="salario">Salário Fixo:</label>
        <input type="number" id="salario" name="salario">
        <p></p>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>