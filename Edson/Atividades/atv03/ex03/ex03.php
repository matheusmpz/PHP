<?php
// Atividade 3:  Crie uma formulário que capture a tabuada solicitada do usuário e exiba a tabuada na tela em HTML.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03 -PHP</title>
</head>
<body>
    <h1>Tabuada em PHP</h1>
    <form action="ex03.3.php" method="get">
        <label for="tabuada"> Escolha um número:
            <input type="number" id="tabuada" name="tabuada">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>