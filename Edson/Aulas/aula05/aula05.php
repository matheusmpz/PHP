<?php
    echo('<h1>Trabalhando com Array em PHP</h1>');

    echo('<h3>Array Unidimensional</h3>');

    $frutas = ['Banana', 'Maça', 'Uva', 'Laranja', 'Tomate'];

    echo($frutas);

    echo('<hr>');

    var_dump($frutas);
    echo('<hr>');
    echo('<pre>');  print_r($frutas);  echo('</pre>');

    echo ('<hr>'. $frutas[2]);
    echo("<hr>");

    echo('<h3>Array Assosiativo</h3>');

    $mercadoria = [
        258 => "Arroz",
        259 => "Feijão",
        257 => "Cenoura"
    ];

    $estado = [
        "SP" => "São Paulo",
        "RJ" => "Rio de Janeiro"
    ];

    echo($mercadoria[259] . "<br>");
    echo($estado["RJ"] . "<br><img src='https://media.staticontent.com/media/pictures/0ecdf6e6-cf35-4a97-9d44-0d66ca0ac808'/>");
    echo('<hr>');

    echo('<h3>Array Multidimenssional</h3>');

    $feira = [
        "frutas" => [
            11 => "Banana",
            25 => "Maça",
            36 => "Uva",
            4 => "Manga",
            "Chocoleitos"
        ],
        "verduras" => [
            "Alface",
            "Repolho",
            "Cenoura"
        ]
    ];

    var_dump($feira);
    echo($feira ["frutas"][36] . "<br>");
    echo($feira ["frutas"][37] . "<br>");
    echo($feira ["verduras"][1] . "<br>");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Array</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Sora", sans-serif;
            padding: 24px;
        }
        img {
            width: 1080px;
        }
    </style>
</head>
</html>