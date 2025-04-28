<?php

espacamento();

echo "Oi! Preciso das medidas de altura e das medidas de base de 5 retângulos!\n";

$retangulos = array(); //array dos arrays (b, h)

for($i = 1; $i < 6; $i++) { //cria 5 retangulos

    echo "\nRetângulo número " . $i . "\n";

    desenhar_retangulo();

    $base = readline("Base (b) = ");
    $altura = readline("Altura (h) = ");
    echo "\n";

    $ret["base"] = $base;
    $ret["altura"] = $altura;
    array_push($retangulos, $ret);

    espacamento();
}

foreach($retangulos as $r) { //retangulos tem 5 entradas, $r tem 2 entradas (base, altura)
    $area = area($r);
    printf("Retângulo %d X %d = %d\n",
    $r["base"], $r["altura"], $area);
}

espacamento();

function area($ret): float|int {
    $area = $ret["base"] * $ret["altura"];

    return $area;
}

function desenhar_retangulo(): void {
    echo "\n";

    echo "-------------------\n";
    echo "-                 -\n";
    echo "-                 -\n";
    echo "-                 -\n";
    echo "-------------------\n";

    echo "\n";
}

function espacamento() {
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>