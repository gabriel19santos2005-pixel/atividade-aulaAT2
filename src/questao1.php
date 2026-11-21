<?php

class Livro
{
    public string $titulo;
    public string $autor;
    public string $editora;
    public int $anoPublicacao;
    public int $numeroPaginas;

    public function __construct(
        string $titulo,
        string $autor,
        string $editora,
        int $anoPublicacao,
        int $numeroPaginas
    ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->anoPublicacao = $anoPublicacao;
        $this->numeroPaginas = $numeroPaginas;
    }

    public function exibirFicha(): void
    {
        echo "Ficha do livro\n";
        echo "Título: {$this->titulo}\n";
        echo "Autor: {$this->autor}\n";
        echo "Editora: {$this->editora}\n";
        echo "Ano de publicação: {$this->anoPublicacao}\n";
        echo "Número de páginas: {$this->numeroPaginas}\n";
    }
}

$livro = new Livro('O Pequeno Pri­ncipe', 'Antoine de Saint-ExupÃ©ry', 'Agir', 1943, 96);
$livro->exibirFicha();

