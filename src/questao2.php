<?php

class Produto
{
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco)
    {
        if ($preco < 0) {
            throw new InvalidArgumentException('O preço não pode ser negativo.');
        }

        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto(float $percentual): float
    {
        if ($percentual < 0 || $percentual > 100) {
            throw new InvalidArgumentException('O desconto deve estar entre 0 e 100%.');
        }

        $this->preco = round($this->preco * (1 - $percentual / 100), 2);

        return $this->preco;
    }
}

$produto = new Produto('Caderno', 25.00);
echo "Produto: {$produto->nome}\n";
echo 'Preço com desconto: R$ ' . number_format($produto->aplicarDesconto(10), 2, ',', '.') . "\n";
