<?php

echo "\n";
echo"--------------------------------------------------------------------" . "\n";
echo "\n";

$x = readline("Me passa um raio de um círculo pra eu calcular a área e/ou a circunferência!" . " ");

echo "\n";
echo"--------------------------------------------------------------------" . "\n";
echo "\n";

$area_circulo = area_circulo($x);
$circunferencia_circulo = circunferencia_circulo($x);

(string)$selecao = readline("Queres calcular a área ou a circunferência do círculo? (Digite 'área' ou 'circunferência')" . " ");

echo "\n";
echo"--------------------------------------------------------------------" . "\n";
echo "\n";

if($selecao == "área") {
    echo "A área do círculo é: " . $area_circulo . "\n";
}

if($selecao == "circunferência") {
    echo "A circunferência do círculo é: " . $circunferencia_circulo . "\n";
}

echo "\n";
echo"--------------------------------------------------------------------" . "\n";
echo "\n";

exit;

function area_circulo($x) {
    return 3.14 * ($x * $x);
}

function circunferencia_circulo($x) {
    return 2 * 3.14 * $x;
}

?>
