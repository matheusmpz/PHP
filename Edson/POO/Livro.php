<?php
    require_once 'Produto.php';

    class Livro extends Produto {
        protected $autor;
        protected $editora;

        public function __construct($nome, $preco, $autor, $editora)
        {   
            parent:: __construct($nome, $preco);

            $this->autor = $autor;
            $this->editora = $editora;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getEditora(){
            return $this->editora;
        }

        public function livroVenda() {
            return $this->preco * 1.05;
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