<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$x = readline("Me passa um número pra iniciar o código!" . "\n");

echo "--------------------------------------------------------------------" . "\n";
echo "\n";

if ($x < 0) {
    echo "O número é negativo!" . "\n" . "\n" . "Portanto, triplicarei ele!" . "\n" . "\n" . "O resultado é: " . $x * 3 . "\n";
} elseif ($x > 0 | $x == 0) {
    echo "O número é positivo!" . "\n" . "\n" . "Portanto, dobrarei ele!" . "\n" . "\n" . "O resultado é: " . $x * 2 . "\n";
}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

?>