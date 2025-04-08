<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$Y = readline("Vamos determinar um resultado com base no valor a ser inserido aqui (Este, será implementado na função de primeiro grau 'F(x) = 5x + 2x + 3'): ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "O valor obtido é: " . calculateY($Y) . ".";

echo "\n";
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "O objetivo do código é operar 5 vezes, com 5 números distintos (ou como preferir), tenta aí :P " . "\n";

(string)$answer = "";

while($answer == "" | $answer == "Jóia!") {
$answer =  readline("Digita (Não quero não :c) pra recusar! E (Jóia!) pra rodar o código!" . "\n" . "R: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$Y = readline("Qual é o próximo valor que você quer testar?" . "\n" . "R: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "O valor obtido é: " . calculateY($Y) . ".";

echo "\n";
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

}

function calculateY (float $Y) {

    $result = 0;

    echo "5x + 2x + 3" . "\n";
    echo "( 5x ) + ( 2x ) + ( 3 )" . "\n";
    echo "( 5 * x ) + ( 2 * x ) + ( 3 )" . "\n";
    echo "( 5 * $Y ) + ( 2 * $Y ) + ( 3 )" . "\n";

    $result = ( 5 * $Y ) + ( 2 * $Y ) + ( 3 );

    return $result;
};