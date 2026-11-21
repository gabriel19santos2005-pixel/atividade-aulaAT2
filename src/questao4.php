<?php

final class Funcionario
{
    private float $salario;

    public function __construct(float $salario)
    {
        $this->setSalario($salario);
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        if ($salario < 0) {
            throw new InvalidArgumentException('O salário não pode ser negativo.');
        }

        $this->salario = $salario;
    }
}

$funcionario = new Funcionario(3500.00);
echo 'Salário inicial: R$ ' . number_format($funcionario->getSalario(), 2, ',', '.') . PHP_EOL;

$funcionario->setSalario(3800.00);
echo 'Salário atualizado: R$ ' . number_format($funcionario->getSalario(), 2, ',', '.') . PHP_EOL;