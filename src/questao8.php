<?php

abstract class FuncionarioAbstrato
{
    protected float $salario;

    public function __construct(float $salario)
    {
        $this->salario = $salario;
    }

    abstract public function calcularBonus(): float;
}

$vendedor = new Vendedor(2500.00, 12000.00);
$gerente = new Gerente(6000.00);
echo 'Bônus do vendedor: R$ ' . number_format($vendedor->calcularBonus(), 2, ',', '.') . "\n";
echo 'Bônus do gerente: R$ ' . number_format($gerente->calcularBonus(), 2, ',', '.') . "\n";

class Vendedor extends FuncionarioAbstrato
{
    private float $totalVendas;

    public function __construct(float $salario, float $totalVendas)
    {
        parent::__construct($salario);
        $this->totalVendas = $totalVendas;
    }

    public function calcularBonus(): float
    {
        return $this->totalVendas * 0.10;
    }
}

class Gerente extends FuncionarioAbstrato
{
    public function calcularBonus(): float
    {
        return $this->salario * 0.20;
    }
}
