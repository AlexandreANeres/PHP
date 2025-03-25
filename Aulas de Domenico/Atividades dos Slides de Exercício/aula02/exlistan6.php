<?php

//multiplicando número sem a operação *
$valor_multiplicacao = 0;

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$x = readline("Me passa um número pra iniciar o código! (Dica: vou multiplicar ele pelo segundo número): " . " ");
$y = readline("Me passa o segundo número:". " ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

for($i = 1; $i <= $y; $i++) {
    $valor_multiplicacao = $valor_multiplicacao + $x;
}

echo "O resultado da multiplicação é: " . $valor_multiplicacao . "\n";

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

?>