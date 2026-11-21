<?php

abstract class Animal
{
    private int $idade;

    public function __construct(int $idade)
    {
        $this->setIdade($idade);
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void
    {
        if ($idade < 0) {
            throw new InvalidArgumentException('A idade não pode ser negativa.');
        }

        $this->idade = $idade;
    }

    abstract public function fazerBarulho(): string;
}

$animais = [new Cachorro(5), new Gato(3), new Passaro(1)];
foreach ($animais as $animal) {
    echo get_class($animal) . ' (' . $animal->getIdade() . ' anos): ' . $animal->fazerBarulho() . "\n";
}

class Cachorro extends Animal
{
    public function fazerBarulho(): string
    {
        return 'Au au!';
    }
}

class Gato extends Animal
{
    public function fazerBarulho(): string
    {
        return 'Miau!';
    }
}

class Passaro extends Animal
{
    public function fazerBarulho(): string
    {
        return 'Piu piu!';
    }
}
