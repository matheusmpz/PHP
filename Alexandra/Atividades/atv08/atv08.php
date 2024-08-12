<?php
// Função 8
// Leia o custo de fábrica de um carro e informe o custo ao consumidor.
// O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o resultado). 
// Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%).
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função - 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="script.php" id="form" method="post">
        <label for="valor">Valor de Custo:</label>
        <input type="number" id="valor" name="valor">
        <p></p>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>