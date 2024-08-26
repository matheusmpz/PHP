<?php

    class Produto {
        protected $nome;
        protected $preco;
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function setPreco($preco) {
            $this->preco = $preco;
        }
    
        public function getNome() {
            echo "<h1>Produto Fisico</h1>Nome: " . $this->nome . "<br>";
        }
    
        public function getPreco() {
            echo "Preço: " . $this->preco . "<br>";
        }
    
        public function calcularDesconto() {
            $desconto = $this->preco * 0.15;
            $precoComDesconto = $this->preco - $desconto;
            echo "Produto com desconto: " . $precoComDesconto . "<p>";
        }
    }
    
    class ProdutoDigital extends Produto {
        protected $sizeFile;
    
        public function calcularDesconto() {
            $desconto = $this->preco * 0.4;
            $precoComDesconto = $this->preco - $desconto;
            echo "<h1>Produto Digital</h1>Produto com desconto: " . $precoComDesconto . "<br>";
        }
    }
    
    $meuProduto = new Produto();
    $meuProduto->setNome("Livro");
    $meuProduto->setPreco(70);
    
    $meuProduto->getNome();
    $meuProduto->getPreco();
    $meuProduto->calcularDesconto();


    $meuProdutoDigital = new ProdutoDigital;
    $meuProdutoDigital->setNome("E-Book");
    $meuProdutoDigital->setPreco(50);

    $meuProdutoDigital->calcularDesconto();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
            padding: 24px;
        }
    </style>
</head>
<body>
    
</body>
</html>