<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
$x = readline("Me passa um número pra iniciar o código!" . "\n");
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
$y = readline("Me passa outro número pra acrescentar ao código!" . "\n");
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
$z = readline("Me passa mais um número pra finalizar o código!" . "\n");
echo "\n";
echo "--------------------------------------------------------------------" . "\n";

//O progrma vai retornar o menor dos números digitados

if ($x < $y && $x < $z) {
    echo "O menor número é: " . $x;
} elseif ($y < $x && $y < $z) {
    echo "O menor número é: " . $y;
} else {
    echo "O menor número é: " . $z;
}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

?>