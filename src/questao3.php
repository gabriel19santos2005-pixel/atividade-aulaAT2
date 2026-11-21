<?php

class ContaBancaria
{
    private float $saldo;

    public function __construct(float $saldoInicial = 0.0)
    {
        if ($saldoInicial < 0) {
            throw new InvalidArgumentException('O saldo inicial não pode ser negativo.');
        }

        $this->saldo = $saldoInicial;
    }

    public function depositar(float $valor): float
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException('O valor do depósito deve ser maior que zero.');
        }

        $this->saldo += $valor;

        return $this->saldo;
    }

    public function sacar(float $valor): float
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException('O valor do saque deve ser maior que zero.');
        }

        if ($valor > $this->saldo) {
            throw new RuntimeException('Saldo insuficiente para realizar o saque.');
        }

        $this->saldo -= $valor;

        return $this->saldo;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }
}

$conta = new ContaBancaria(100.00);
echo 'Saldo inicial: R$ ' . number_format($conta->consultarSaldo(), 2, ',', '.') . "\n";
echo 'Após depósito: R$ ' . number_format($conta->depositar(50.00), 2, ',', '.') . "\n";
echo 'Após saque: R$ ' . number_format($conta->sacar(30.00), 2, ',', '.') . "\n";
