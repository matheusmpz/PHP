<?php
    require_once 'Livro.php';

    $livro = new Livro("Fundamentos de Design Criativo", 142.74, "Gavin Ambrose", "Bookman");

    echo "Autor: " . $livro->getAutor() . "<br>";
    echo "Livro: " . $livro->getNome() . "<br>";
    echo "Editora: " . $livro->getEditora() . "<br>";
    echo "Preço de Custo: " . $livro->getPreco() . "<br>";
    echo "Preço de venda: " . $livro->livroVenda() . "<br>";
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