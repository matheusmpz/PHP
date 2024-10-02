<?php
    class Pessoa {
        public $nome;
        public $telefone;
        public $idade;
        private $nivel;
        protected $cpf;


        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function imprimirDados() {
            echo "Nome: {$this->nome} <br> Telefone: {$this->telefone}<br>, Idade: {$this->idade}";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Sim";
    $pessoa->telefone = "(11) 99980-6578";
    $pessoa->idade = 33;
    $pessoa->setCpf("123.456.789-10");

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