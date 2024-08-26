<?php
// Função 7
// leia o preço de custo de um produto
// leia percentual de acréscimo pra venda;
// calcule o valor da venda, considerando que o valor da venda será o preciso de custo acrescido do percentual informado pelo usuário
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função - 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="script.php" id="form" method="post">
        <label for="valor">Valor de Custo:</label>
        <input type="number" id="valor" name="valor">
        <p></p>
        <label for="add">Acrecimo de venda:</label>
        <input type="number" id="add" name="add">
        <p></p>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>