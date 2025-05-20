<?php

class Pessoa {

    /*<--Atributos-->*/

    private string $nome;
    private string $endereco;
    private string $cidade;
    private string $UF;
    private string $altura;

    /*<--Getters &  Setters-->*/

    /*<___Nome___>*/

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /*<___Endereço___>*/

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /*<___Cidade___>*/

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /*<___UF___>*/

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    /*<___Altura___>*/

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    /*<--Métodos-->*/

    public function getApresentacao() {
        return "Olá mundo, sou " . $this -> getNome() . ", resido no endereço " . $this -> getEndereco() . ", " . $this -> getCidade() . ", " . $this -> getUF()  . " e possuo uma altura de " .  $this -> getAltura() . "m!";
    }
}

/*<--Programa geral-->*/

$eu = new Pessoa();

$eu -> setNome("Alexandre Andre Neres");
$eu -> setAltura("1.82");
$eu -> setEndereco("Rua das Violetas");
$eu -> setCidade("Foz do Iguaçu");
$eu -> setUF("PR");

espacamento();
echo $eu -> getApresentacao();
espacamento();

$theo = new Pessoa();

$theo -> setNome("Theo Marlon Spath Tannouri");
$theo -> setAltura("1.78");
$theo -> setEndereco("Rua Araucária");
$theo -> setCidade("Foz do Iguaçu");
$theo -> setUF("PR");

espacamento();
echo $theo -> getApresentacao();
espacamento();

function espacamento() {

    echo "\n";
    echo "---------------------------------------------";
    echo "\n";

}

?>

