<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "Oi, preciso de 3 valores, pois quero calcular a média ponderada utilizando-os; vou solicitar eles um de cada vez! Então relaxa: ";

echo "\n";
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

(double)$A = readline("Valor A: ");
echo "\n";
(double)$B = readline("Valor B: ");
echo "\n";
(double)$C = readline("Valor C: ");
echo "\n";

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "A média dos valores que você me passou deu: " . media($A, $B, $C);


function media ($A, $B, $C) {

    (double)$formula = (($A * 3) + ($B * 5) + ($C * 2)) / 10;

    return $formula;

}

echo "\n";
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

?>