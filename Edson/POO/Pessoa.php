<?php
class Pessoa {
    private $nome;
    private $telefone;
    private $idade;
    private $cpf;

    public function __construct(string $nome, string $telefone, int $idade, string $cpf) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;
        $this->setCpf($cpf);
    }

    public function setCpf(string $cpf): void {
        // Garante que a entrada seja uma string e remove caracteres não numéricos
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }

    public function imprimirDados(): void {
        echo "Nome: {$this->nome} <br> Telefone: {$this->telefone}<br> Idade: {$this->idade}<br>";
        echo "CPF: {$this->cpf} - ";
        if ($this->verificarCpf()) {
            echo "Válido<br>";
        } else {
            echo "Inválido<br>";
        }
    }

    private function verificarCpf(): bool {
        $cpf = $this->cpf;

        // Verificações básicas
        if (strlen($cpf) !== 11 || preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Cálculo dos dígitos verificadores (com comentários explicativos)
        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                // Multiplica cada dígito do CPF por um peso e soma os resultados
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            // Calcula o resto da divisão por 11 e obtém o dígito verificador
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }
}

// Criando uma instância da classe Pessoa
$pessoa = new Pessoa("João da Silva", "(11) 98765-4321", 30, "123.456.789-10");

// Imprimindo os dados e verificando o CPF
$pessoa->imprimirDados();
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