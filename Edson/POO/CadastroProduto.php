<?php
     require_once 'Eletronico.php';

    $eletronico = new Eletronico("God of War Ragnarök", 134, "6 meses", "bivolt");

    echo "Produto: " . $eletronico->getNome() . "<br>";
    echo "Preço Custo: " . $eletronico->getPreco() . "<br>";
    echo "Garantia: " . $eletronico->getGarantia() . "<br>";
    echo "Voltagem: " . $eletronico->getVoltz() . "<br>";
    echo "Preço Venda: " . $eletronico->precoVenda();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 24px;
            font-family: sans-serif;
            background: #2f2f2f;
            color: #eeeeee;
        }
    </style>
</head>
<body>
</body>
</html>