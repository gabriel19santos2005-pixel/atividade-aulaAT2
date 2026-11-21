<?php

abstract class Forma
{
    abstract public function calcularArea(): float;
}

$formas = [new Retangulo(5, 3), new Circulo(2)];
foreach ($formas as $forma) {
    echo 'Área: ' . number_format($forma->calcularArea(), 2, ',', '.') . "\n";
}

class Retangulo extends Forma
{
    public float $largura;
    public float $altura;

    public function __construct(float $largura, float $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea(): float
    {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma
{
    public float $raio;

    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }

    public function calcularArea(): float
    {
        return pi() * $this->raio ** 2;
    }
}
