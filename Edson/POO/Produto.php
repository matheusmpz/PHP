<?php

    class Produto {
        protected $nome;
        protected $preco;

        public function __construct($nome, $preco)
        {   
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function precoVenda(){
            return $this->preco * 1.2;
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