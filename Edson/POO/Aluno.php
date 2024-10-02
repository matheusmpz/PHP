<?php

    class Aluno {
        public $nome;
        protected $ra;

        public function __construct($nome = null, $ra = null)
        {
            $this->nome = $nome;
            $this->ra = $ra;
        }

        public function getNameCase () {
            return strtoupper($this->nome);
       }

       public function getRa () {
            // Possivel tratamento
            return $this->ra;
       }

       public function dados () {
            return "<br>" . strtoupper($this->nome) . "<br>" . $this->ra;
       }
    }

    $aluno2 = new Aluno("Lauro", 22543788);
    echo $aluno2->getNameCase() . "<br>";
    echo $aluno2->getRa();
    echo $aluno2->dados();
?>