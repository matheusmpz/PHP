<?php
// Função 1
// Ler quatro valores referentes a quatro notas escolares de um aluno e imprimir uma mensagem dizendo que o aluno foi aprovado,
// se o valor da média escolar for maior ou igual a 7.0. Se o valor da média for menor que 7.0, solicitar uma nova nota de exame, somar com o valor da média e obter nova média.
// Se a nova média for maior ou igual a 5, apresentar uma mensagem dizendo que o aluno foi aprovado em exame.
// Se o aluno não foi aprovado, indicar uma mensagem informando esta condição.
// Apresentar junto com as mensagens o valor da média do aluno, para qualquer condição.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = floatval($_POST['nota1']);
        $nota2 = floatval($_POST['nota2']); 
        $nota3 = floatval($_POST['nota3']);
        $nota4 = floatval($_POST['nota4']);
        $notaExame = isset($_POST['notaExame']) ? floatval($_POST['notaExame']) : null;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        if ($media >= 7) {
            echo "Você foi aprovado com a média: " . $media ."<br>";
        } else {
            echo "Você foi reprovado com a nota: ". $media ."<br>";
            if ($notaExame === null) {
                echo "Insira a nota do exame:";
                echo '<form action="script.php" method="post">
                        <input type="hidden" name="nota1" value="'. $nota1 .'">
                        <input type="hidden" name="nota2" value="'. $nota2 .'">
                        <input type="hidden" name="nota3" value="'. $nota3 .'"> 
                        <input type="hidden" name="nota4" value="'. $nota4 .'">
                        <input type="number" name="notaExame" required>
                        <input type="submit" value="Enviar">
                    </form>';
            } else {
                
                $mediaFinal = ($media + $notaExame) / 2;
                
                if ($mediaFinal >= 5) {
                    echo "Você foi aprovado em exame com a nova média: ". $mediaFinal .", sendo maior que 5! <br>";
                } else {
                    echo "Você não foi aprovado com a nova média: " . $mediaFinal .", sendo maior que 5! <br>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="script.php" method="post">
        <label for="nota1">Nota 01:</label>
        <input type="number" id="nota1" name="nota1">
        <p></p>
        <label for="nota2">Nota 02:</label>
        <input type="number" id="nota2" name="nota2">
        <p></p>
        <label for="nota3">Nota 03:</label>
        <input type="number" id="nota3" name="nota3">
        <p></p>
         <label for="nota4">Nota 04:</label>
         <input type="number" id="nota4" name="nota4">
         <p></p>
         <button type="submit">Enviar</button>
    </form>
</body>
</html>