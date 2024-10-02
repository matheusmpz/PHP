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