<?php

class Produto {

    /*<--Atributos-->*/

    private int $quantidade;
    private float $valorUnitario;
    private string $descricao;
    private string $unidadeMedida;

    /*<--Getters & Setters-->*/

    /*<___Quantidade___>*/

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /*<___Valor Unitário___>*/

    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario(float $valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /*<___Descrição___>*/

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /*<___Unidade de Medida___>*/

    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    /*<--Métodos-->*/

    public  function getValorTotal(int $quantidade, float $valorUnidade): float {
        $resultado = $quantidade * $valorUnidade;

        return $resultado;
    }
}

/*<--Programa geral-->*/

$produtos = array();

espacamento();

echo "Olá!!!!!!! Preciso que invente uma descrição top (tipo um nome que torne aquele produto a ser reconhecido) pra 3 diferentes produtos... Te dou 50 centavos depois dessa! \n";

espacamento();

for($i = 1; $i < 4; $i++) {

    $descricao = readline("Descrição do produto (" . $i . "): ");
    
    espacamento();

    $unidadeMedida = readline("1 -> Dimensões do produto (em cm): ");
    echo "\n";

    do {
        $valorUnidade = readline("2 -> O valor unitário do produto (O valor deve ser inteiro ou decimal, jamais negativo! Muito menos zero.): ");
    } while ($valorUnidade <= 0);

    echo "\n";

    do {
    $quantidade = readline("3 -> A quantidade desse produto num estoque indeterminado (O valor deve ser inteiro ou decimal, jamais negativo! Muito menos zero.): ");
    } while ($quantidade <= 0);

    espacamento();

    $produto = new Produto();

    $produto -> setDescricao($descricao);
    $produto -> setUnidadeMedida($unidadeMedida);
    $produto -> setValorUnitario($valorUnidade);
    $produto -> setQuantidade($quantidade);

    $produtos[$i] = $produto;

}

for($i = 1; $i < 4; $i++) {
    echo $produtos[$i] -> getDescricao() . " ( " . $produtos[$i] -> getUnidadeMedida() . " ) | " . $produtos[$i] -> getQuantidade() . " x " . $produtos[$i] -> getValorUnitario() . " = R$ " . $produtos[$i] -> getValorTotal($produtos[$i] -> getQuantidade(), $produtos[$i] -> getValorUnitario()) . "\n";

    espacamento();
}

$maiorValorTotal = 0;

$indiceMaior = 1;

if ($produtos[1]->getValorTotal($produtos[1]->getQuantidade(), $produtos[1]->getValorUnitario()) >=
    $produtos[2]->getValorTotal($produtos[2]->getQuantidade(), $produtos[2]->getValorUnitario()) &&
    $produtos[1]->getValorTotal($produtos[1]->getQuantidade(), $produtos[1]->getValorUnitario()) >=
    $produtos[3]->getValorTotal($produtos[3]->getQuantidade(), $produtos[3]->getValorUnitario())) {
    $indiceMaior = 1;
    $maiorValorTotal = $produtos[1]->getValorTotal($produtos[1]->getQuantidade(), $produtos[1]->getValorUnitario());
} elseif ($produtos[2]->getValorTotal($produtos[2]->getQuantidade(), $produtos[2]->getValorUnitario()) >=
          $produtos[3]->getValorTotal($produtos[3]->getQuantidade(), $produtos[3]->getValorUnitario())) {
    $indiceMaior = 2;
    $maiorValorTotal = $produtos[2]->getValorTotal($produtos[2]->getQuantidade(), $produtos[2]->getValorUnitario());
} else {
    $indiceMaior = 3;
    $maiorValorTotal = $produtos[3]->getValorTotal($produtos[3]->getQuantidade(), $produtos[3]->getValorUnitario());
}

echo "Produto vendido com maior valor total: " . $produtos[$indiceMaior]->getDescricao() . " (" . $produtos[$indiceMaior]->getUnidadeMedida() . ") \n";

espacamento();

function espacamento() {

    echo "\n";
    echo "---------------------------------------------";
    echo "\n";
    echo "\n";

}

?>