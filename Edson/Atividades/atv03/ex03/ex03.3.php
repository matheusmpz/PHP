<?php
$num = $_GET['tabuada'];
$contador = 1;

    while ($contador <= 10) {
        $result = $contador * $num;
        echo $contador . "x" . $num . "=" . $result . "<br>";
        $contador++;
    }
?>