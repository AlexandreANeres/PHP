<?php

class Carta
{

    //Atributos

    private string $numero;
    private string $nome;

    //Getters & Setters

    //<--Número-->

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    //<--Nome-->

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    //Métodos


}

//Programa principal

$opcao = 0;

do {

    espacamento();

    echo "----------JOGAR ADIVINHAÇÃO DE CARTAS----------\n\n";
    echo "1 -> BARALHO POKER\n";
    echo "2 -> BARALHO UNO\n";
    echo "0 -> Sair\n";

    espacamento();
    echo "\n";

    $opcao = readline("R: ");

    espacamento();

    $cartas = array();

    switch ($opcao) {
        case 1:
            //BARALHO POKER

            $cartas = create_baralho("POKER");

            jogar($cartas);

            break;

        case 2:
            //BARALHO UNO

            $cartas = create_baralho("UNO");

            jogar($cartas);

            break;

        case 0:
            //SAIR
            echo "Programa encerrado!";
            espacamento();
            echo "\n";
            exit;

        default:
            //VALIDAÇÃO
            echo "Opção inválida! Tente novamente.";
            break;
    }
} while ($opcao != 0);

//FUNÇÕES

function esperar($texto)
{

    echo $texto;
    sleep(1);
    echo ".";
    sleep(1);
    echo ".";
    sleep(1);
    echo ".";
    sleep(1);
}

function jogar($cartas)
{
    $jogo = array();
    $confirmar = 0;
    $espera = 0;

    for ($t = 1; $t <= 10; $t++) {

        echo "\n";
        echo "Carta número " . $t . " da mão:";
        echo "\n";

        $jogo[$t] = $cartas[array_rand($cartas)];
        desenhar($jogo[$t]->getNome(), $jogo[$t]->getNumero());

        echo "\n";
        $confirmar = readline("PRESSIONE ENTER PARA CONTINUAR");
        espacamento();
    }

    esperar("Processando");

    echo "\n";
    echo "\n";
    echo "Escolha uma das 10 cartas digitando o valor da carta na sua mão (de 1 à 10)";
    echo "\n";

    do {
        $escolha = readline("R: ");

        if ($escolha < 1 || $escolha > 10) {
            echo "\n";
            echo "Ou você digitou enquanto o programa processava (o programa exibirá a mensagem de erro a quantidade de vezes em que o ENTER foi pressionado), ou você escolheu um número inválido! Tente novamente!";
            echo "\n";
            echo "\n";
        }
    } while ($escolha < 1 || $escolha > 10);
    echo "\n";

    $resposta = $jogo[$escolha];

    //EMBARALHAR

    esperar("Embaralhando");

    espacamento();

    for ($m = count($jogo) - 1; $m > 1; $m--) {
        $j = rand(1, $m);
        $memoria = $jogo[$m];
        $jogo[$m] = $jogo[$j];
        $jogo[$j] = $memoria;
    }

    //FIM EMBARALHAR

    desenhar_mao();

    espacamento();

    $pontuacao = 10;

    $loop = 0;

    echo "Qual dessas 10 você chuta ser a carta que você escolheu? (Cada erro diminuirá 1 ponto da pontuação total [10], quanto menor sua pontuação, pior sua intuição :D)";
    echo "\n";
    echo "OBS: VOCÊ PODE DESISTIR DIGITANDO 0!!!";
    echo "\n";

    do {
        echo "\n";
        $adivinhar = readline("R: ");

        if ($adivinhar >= 1 && $adivinhar <= 10 && isset($jogo[$adivinhar])) {

            if ($jogo[$adivinhar] === $resposta) {
                echo "\n";
                echo "Parabéns!! Você acertou!!!";
                echo "\n";

                espacamento();
                echo "\n";

                echo "Pontuação Final: " . $pontuacao . " pontos!";
                echo "\n";

                if ($pontuacao == 10) {
                    echo "Sua intuição é ESPETACULAR!!";
                    echo "\n";
                }
                if ($pontuacao >= 8 && $pontuacao <= 9) {
                    echo "Sua intuição é boa!!";
                    echo "\n";
                }
                if ($pontuacao >= 5 && $pontuacao <= 7) {
                    echo "Sua intuição é bem mediana.";
                    echo "\n";
                }
                if ($pontuacao >= 2 && $pontuacao <= 4) {
                    echo "Sua intuição é mequetrefe.";
                    echo "\n";
                }
                if ($pontuacao <= 1) {
                    echo "Fique longe de apostas.";
                    echo "\n";
                }

                $loop = 1;
            } else if ($adivinhar == 0) {
                espacamento();
                echo "\n";
                echo "Frango tem que fugir mesmo.";
                echo "\n";
                echo "Pontuação Final: 0 de covarde.";
                echo "\n";
                $loop = 1;
            } else {
                $pontuacao--;
                espacamento();
                echo "\n";
                echo "Você errou! Tenta denovo aí :) [PONTUAÇÃO = " . $pontuacao . "]";
                echo "\n";
                espacamento();
            }
        } else {
            espacamento();
            echo "\n";
            echo "Seleção inválida!!!!!";
            echo "\n";
            espacamento();
        }
    } while ($loop == 0);

    espacamento();
    echo "\n";

    esperar("Processando");

    echo "\n";
}

function create_baralho($tipo)
{
    $cartas = array();

    if ($tipo == "POKER") {
        for ($i = 1; $i < 5; $i++) {
            if ($i == 1) {
                $nome = "♠";
            }
            if ($i == 2) {
                $nome = "♥";
            }
            if ($i == 3) {
                $nome = "♦";
            }
            if ($i == 4) {
                $nome = "♣";
            }

            for ($k = 1; $k <= 13; $k++) {
                $carta = new Carta();
                $carta->setNome($nome);

                if ($k == 1) {
                    $carta->setNumero("A");
                } else if ($k == 11) {
                    $carta->setNumero("J");
                } else if ($k == 12) {
                    $carta->setNumero("Q");
                } else if ($k == 13) {
                    $carta->setNumero("K");
                } else {
                    $carta->setNumero($k);
                }

                array_push($cartas, $carta);
            }
        }
    } else if ($tipo == "UNO") {
        for ($i = 1; $i < 5; $i++) {
            if ($i == 1) {
                $nome = "🟩";
            }
            if ($i == 2) {
                $nome = "🟨";
            }
            if ($i == 3) {
                $nome = "🟥";
            }
            if ($i == 4) {
                $nome = "🟦";
            }

            for ($k = 0; $k <= 12; $k++) {
                $carta = new Carta();
                $carta->setNome($nome);

                if ($k == 10) {
                    $carta->setNumero("🔄");
                } else if ($k == 11) {
                    $carta->setNumero("🚫");
                } else if ($k == 12) {
                    $carta->setNumero("+2");
                } else {
                    $carta->setNumero($k);
                }

                array_push($cartas, $carta);
            }
        }

        $cartaPreta1 = new Carta();
        $cartaPreta1->setNome("⬛");
        $cartaPreta1->setNumero("🍭");

        $cartas[56] = $cartaPreta1;

        $cartaPreta2 = new Carta();
        $cartaPreta2->setNome("⬛");
        $cartaPreta2->setNumero("+4");

        $cartas[57] = $cartaPreta2;
    }

    return $cartas;
}

function desenhar($valor, $naipe)
{
    espacamento();
    echo "\n+-------+\n";
    echo "| $valor     |\n";
    echo "|   $naipe   |\n";
    echo "|     $valor |\n";
    echo "+-------+\n";
    espacamento();
}

function desenhar_mao()
{
    echo "\n";
    echo "+-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+
| 1     | | 2     | | 3     | | 4     | | 5     | | 6     | | 7     | | 8     | | 9     | | 10    |
|   ?   | |   ?   | |   ?   | |   ?   | |   ?   | |   ?   | |   ?   | |   ?   | |   ?   | |   ?   |
|     1 | |     2 | |     3 | |     4 | |     5 | |     6 | |     7 | |     8 | |     9 | |    10 |
+-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+
";
}

function espacamento()
{
    echo "\n";
    echo "------------------------------------";
    echo "\n";
}
