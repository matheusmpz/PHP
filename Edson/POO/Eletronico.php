<?php
    // Importando o outro arquivo
    require_once 'Produto.php';

    class Eletronico extends Produto{
        private $garantia;
        private $voltz;

        public function __construct($nome, $preco, $garantia, $voltz)
        {   
            parent:: __construct($nome, $preco);

            $this->garantia = $garantia;
            $this->voltz = $voltz;
        }

        public function getGarantia(){
            return $this->garantia;
        }

        public function getVoltz(){
            return $this->voltz;
        }
    }
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