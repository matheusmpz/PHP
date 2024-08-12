<?php
    $name1 = "JOÃO SILVA";
    $CPF1 = "254.258.269-38";
    $RG1 = "3936985-X";
    $rua = "Rua: Paraíba, 125, Centro, Marilia-SP";
    $name2 = "MARIA DAS DORES SILVA";
    $CPF2 = "258.698.951-78";
    $RG2 = "357895147- 1";
    $num = "1598741";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 01 - PHP</title>
    <style>
         body {
            font-family: sans-serif;
            padding: 24px;
            color: ##2f2f2f;
            background: #eeeeee;
        }
    </style>
</head>
<body>
    <p>Eu, <strong><?= $name1 ?></strong>, inscrito (a) no CPF sob o nº <strong><?= $CPF1 ?></strong> e no RG nº <strong><?= $RG1 ?></strong>, residente e domiciliado (a) à <strong><?= $rua ?></strong>, autorizo o (a) Sr(a). <strong><?= $name2 ?></strong>, inscrito (a) no CPF sob o nº <strong><?= $CPF2 ?></strong> e no RG nº <strong><?= $RG2 ?></strong>, a retirar em meu nome os documentos previamente solicitados por meio do requerimento nº <strong><?= $num ?></strong></p>
</body>
</html>
