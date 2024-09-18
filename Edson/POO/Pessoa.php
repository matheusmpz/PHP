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