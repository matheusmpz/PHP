<?php
// Função 6
// Calcular o Índice de Massa Corporal (IMC) de uma pessoa. O IMC é calculado usando a fórmula: IMC=peso/altura²
// Solicitar ao usuário que insira seu peso (em quilogramas) e sua altura (em metros).
// Calcular o IMC e exibir uma mensagem indicando a faixa de IMC em que a pessoa se encontra, de acordo com a tabela a seguir:
//     IMC abaixo de 18.5: Abaixo do peso
//     IMC entre 18.5 e 24.9: Peso normal
//     IMC entre 25 e 29.9: Sobrepeso
//     IMC entre 30 e 34.9: Obesidade grau 1
//     IMC entre 35 e 39.9: Obesidade grau 2
//     IMC acima de 40: Obesidade grau 3 (mórbida)

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $peso = isset($_POST['weight']) ? floatval($_POST['weight']) : 0;
        $altura = isset($_POST['height']) ? floatval($_POST['height']) : 0;
    
        $IMC = 0;
        $descript = '';
    
        if ($peso > 0 && $altura > 0) {
            $IMC = round($peso / ($altura * $altura), 2);
        
            if ($IMC < 18.5) {
                $descript = 'Cuidado! Você está abaixo do peso ideal!';
                $classe = 'attention';
            } elseif ($IMC >= 18.5 && $IMC <= 24.9) {
                $descript = 'Você está no peso ideal!';
                $classe = 'normal';
            } elseif ($IMC >= 25 && $IMC <= 29.9) {
                $descript = 'Cuidado! Você está com sobrepeso!';
                $classe = 'attention';
            } elseif ($IMC >= 30 && $IMC <= 34.9) {
                $descript = 'Cuidado! Você está com obesidade grau 1!';
                $classe = 'attention';
            } elseif ($IMC >= 35 && $IMC <= 39.9) {
                $descript = 'Cuidado! Você está com obesidade grau 2!';
                $classe = 'attention';
            } else {
                $descript = 'Cuidado! Você está com obesidade grau 3 (mórbida)!';
                $classe = 'attention';
            }
        } else {
            $descript = 'Valores inválidos!';
            $classe = 'attention';
        }
    
        echo json_encode([
            'IMC' => $IMC,
            'description' => $descript,
            'classe' => $classe
        ]);
        exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calcule o seu peso ideal, acompanhe o estado de seu físico em nosso site!">
    <meta name="keywords" content="IMC, calculador de imc, imc calculate">
    <meta property="og:site_name" content="Calculadora de IMC">
    <meta property="og:image" content="https://calculadora-imc-silk-ten.vercel.app/assets/image/illustration.svg">
    <title>Função - 06</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="image/weight.png" type="image/x-icon">
</head>
<body>
    <main id="container">
        <section id="img">
            <img src="image/illustration.svg" alt="#">
        </section>
        <section id="calculator">
            <form id="form" action="script.php" method="post">
                <h1 id="title">Calculador - IMC</h1>
                <div class="input-box">
                    <label for="weight">Peso em KG</label>
                    <div class="input-field">
                        <i class="fa-solid fa-weight-hanging"></i>
                        <input type="number" id="weight" name="weight" required>
                        <span>Kg</span>
                    </div>
                </div>
                <div class="input-box">
                    <label for="height">Altura em metros</label>
                    <div class="input-field">
                        <i class="fa-solid fa-ruler"></i>
                        <input type="number" step="0.01" id="height" name="height" required>
                        <span>m</span>
                    </div>
                </div>
                <button type="submit" id="calculate">Calcular</button>
                <button type="button" id="reset" class="hidden">Calcular novamente</button>
            </form>
            <div id="infos" class="hidden">
                <div id="result">
                    <div id="bmi">
                        <span id="value"></span>
                        <span>Seu IMC </span>
                    </div>
                    <div id="description">
                        <span></span>
                    </div>
                </div>
                <div id="more_info">
                    <a href="https://www.tuasaude.com/imc/" target="_blank" rel="noopener noreferrer">
                        Mais informações sobre o IMC
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
