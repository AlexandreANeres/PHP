<?php

class Aluno {

    /*<--Atributos-->*/

    private string $nome;
    private float $nota1;
    private float $nota2;

    /*<--Getters & Setters-->*/

    /*<___Nome___>*/

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /*<___Nota 1___>*/

    public function getNota1(): float
    {
        return $this->nota1;
    }

    public function setNota1(float $nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /*<___Nota 2___>*/

    public function getNota2(): float
    {
        return $this->nota2;
    }

    public function setNota2(float $nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }

    /*<--Métodos-->*/

    public function calcMedia(){
        $media = ( $this -> getNota1() + $this -> getNota2() ) / 2;
        echo "A média das duas notas fornecidas é: " . $media;
    }
}

/*<--Programa geral-->*/

for($i = 0; $i < 3; $i++) {

    espacamento();

    $obj = new Aluno();

    $nome = readline("Qual o nome do aluno " . $i . " (Dado necessário para calcular a média): ");

    $nota1 = readline("Qual a primeira nota dele? ");
    $nota2 = readline("Qual a segunda nota dele? ");


    $obj -> setNome($nome);
    $obj -> setNota1($nota1);
    $obj -> setNota2($nota2);

    espacamento();

    $obj -> calcMedia();

    espacamento();

}

function espacamento() {

    echo "\n";
    echo "---------------------------------------------";
    echo "\n";

}