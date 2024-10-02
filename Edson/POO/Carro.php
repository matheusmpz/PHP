<?php
class Carro {
    public $marca;
    public $modelo;
    public $cor;
    public $onOff = false;
    public $emMovimento = false;

    public function ligar() {
        if (!$this->onOff) { 
            $this->onOff = true;
            echo "O seu {$this->modelo} está ligado! Já está na hora de realizar uma revisão, vá à concessionária da {$this->marca} mais próxima. Lembre-se de ligar a luz, afinal, seu carro é {$this->cor} e as pessoas não têm olho biônico para te ver no escuro!<br>";
        } else {
            echo "O carro já está ligado!<br>";
        }
    }

    public function desligar() {
        if ($this->emMovimento) {
            echo "Não é possível desligar o carro enquanto ele está em movimento!<br>";
        } else if ($this->onOff) {
            $this->onOff = false;
            echo "O carro foi desligado!<br>";
        } else {
            echo "O carro já está desligado!<br>";
        }
    }

    public function parar() {
        if ($this->emMovimento) {
            $this->emMovimento = false;
            echo "O carro parou.<br>";
        } else {
            echo "O carro já está parado!<br>";
        }
    }

    public function mover() {
        if ($this->emMovimento) {
            echo "O carro já está em movimento!<br>";
        } else if ($this->onOff) {
            $this->emMovimento = true;
            echo "O carro está em movimento!<br>";
        } else {
            echo "O carro está desligado! Não é possível entrar em movimento!<br>";
        }
    }
}

$carro = new Carro();
$carro->marca = "Honda";
$carro->modelo = "Civic";
$carro->cor = "Preto";

$carro->ligar();
$carro->mover(); 
$carro->parar(); 
$carro->desligar(); 
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