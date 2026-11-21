<?php

class Pessoa
{
    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

$aluno = new Aluno('Ana Souza', 16, '2026001');
echo "Aluno: {$aluno->nome}\n";
echo "Idade: {$aluno->idade}\n";
echo "Matrícula: {$aluno->matricula}\n";

class Aluno extends Pessoa
{
    public string $matricula;

    public function __construct(string $nome, int $idade, string $matricula)
    {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }
}
