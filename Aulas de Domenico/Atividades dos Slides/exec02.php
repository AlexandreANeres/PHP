<?php

$intermediario = 0;
$soma = 0;

for($i = 1; $i <= 100; $i++){
    echo "Valor da instância: " . $i . "\n";
    $intermediario = $i;
    $soma =  $soma + $intermediario;
}

echo "\n" . "\n" . "O valor da soma é: " . $soma . "\n" . "\n";

?>