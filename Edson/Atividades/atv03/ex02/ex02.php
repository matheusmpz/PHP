<?php
// Atividade 2:  Crie uma formulário que capture a idade do usuario e use estruturas condicionais para verificar se a pessoa é menor de idade, adulta ou idosa, exibindo em forma de imagem a classificação.

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02 - PHP</title>
</head>
<body>
<h1>Preencha as informações!</h1>
    <form action="ex02.2.php" method="get">
        <label for="nome"> Idade:
            <input type="text" id="idade" name="idade" placeholder="Idade...">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>