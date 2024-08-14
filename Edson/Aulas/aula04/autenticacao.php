<?php

echo "<h1>Dados do Formulário</h1>";

// echo "E-mail:" . $_GET['email'];
// echo "<br>";
// echo "Senha:" . $_GET['senha'];
// echo "<br>";
// echo "Lembrar-me:" . $_GET['lembrame'];

echo "E-mail:" . $_POST['email'];
echo "<br>";
echo "Senha:" . $_POST['senha'];
echo "<br>";
echo "Lembrar-me:" . $_POST['lembrame'];
?>