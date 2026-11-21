<?php

class Veiculo
{
    public string $marca;
    public string $modelo;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
}

$carro = new Carro('Toyota', 'Corolla', 4);
$moto = new Moto('Honda', 'CB 500', 500);
echo "Carro: {$carro->marca} {$carro->modelo}, {$carro->numeroPortas} portas\n";
echo "Moto: {$moto->marca} {$moto->modelo}, {$moto->cilindradas} cilindradas\n";

class Carro extends Veiculo
{
    public int $numeroPortas;

    public function __construct(string $marca, string $modelo, int $numeroPortas)
    {
        parent::__construct($marca, $modelo);
        $this->numeroPortas = $numeroPortas;
    }
}

class Moto extends Veiculo
{
    public int $cilindradas;

    public function __construct(string $marca, string $modelo, int $cilindradas)
    {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }
}
