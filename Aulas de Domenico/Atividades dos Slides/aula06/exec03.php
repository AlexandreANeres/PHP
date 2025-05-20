<?php

class Livro {

    /*<--Atributos-->*/

    private string $titulo;
    private string $autor;
    private string $genero;

    private int $numero_paginas;

    /*<--Getters & Setters-->*/

    /*<___Título___>*/

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /*<___Autor___>*/

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /*<___Gênero___>*/

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /*<___Número de Páginas___>*/

    public function getNumeroPaginas(): int
    {
        return $this->numero_paginas;
    }

    public function setNumeroPaginas(int $numero_paginas): self
    {
        $this->numero_paginas = $numero_paginas;

        return $this;
    }

    /*<--Métodos-->*/

}

/*<--Programa geral-->*/

$livros = array();

for($i = 0; $i < 3; $i++) {

    $livro = new Livro();

    espacamento();

    $titulo = readline("Qual é o nome do livro " . $i . "? ");
    $autor = readline("Qual é o autor do livro " . $i . "? ");
    $genero = readline("Qual é o genero do livro " . $i . "? ");
    $nPags = readline("Qual é o número de páginas do livro " . $i . "? ");

    $livro -> setTitulo($titulo);
    $livro -> setAutor($autor);
    $livro -> setGenero($genero);
    $livro -> setNumeroPaginas($nPags);

    $livros[$i] = $livro;

}

if(($livros[0] -> getNumeroPaginas()) > ($livros[1] -> getNumeroPaginas())) {
    $maiorPag = $livros[0];
    if(($livros[0] -> getNumeroPaginas()) > ($livros[2] -> getNumeroPaginas())) {
        $maiorPag = $livros[0];
    } else {
        $maiorPag = $livros[2];
    }
} else if(($livros[1] -> getNumeroPaginas()) > ($livros[2] -> getNumeroPaginas())) {
    $maiorPag = $livros[1];
} else {
    $maiorPag = $livros[2];
}

espacamento();
echo "O livro com a maior quantidade de páginas é: " . $maiorPag -> getTitulo() . " Com " . $maiorPag -> getNumeroPaginas() . " páginas!";
espacamento();

function espacamento() {

    echo "\n";
    echo "---------------------------------------------";
    echo "\n";

}