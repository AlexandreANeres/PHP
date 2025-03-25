<?php

echo"\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$x = readline("Me passa um número pra iniciar o código!" . "\n");
$y = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$z = readline("Me passa um último número pra finalizar o código" . "\n");

echo "--------------------------------------------------------------------" . "\n";

echo "A média dos números é: " . media($x, $y, $z) . "\n";
echo "--------------------------------------------------------------------" . "\n";
function media($x, $y, $z) {
    return ($x + $y + $z) / 3;
}

echo "\n";
?>