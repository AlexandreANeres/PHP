<?php

espacamento();

echo "Bem vindo ao meu programa! Preciso de 10 números :) \n";

$numeros = array();

for($i = 1; $i <= 10; $i++) {
    echo"\n Me passa aí o ";
    subs($i);
    
    $valor = readline(" número: ");

    array_push($numeros, $valor);
}

espacamento();

for ($i = 0; $i < count($numeros) - 1; $i++) {
    for ($j = 0; $j < count($numeros) - 1 - $i; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

$maiorN = $numeros[9];
$menorN = $numeros[0];

echo "O maior valor digitado: " . $maiorN;
echo "\n";
echo "O menor valor digitado: " . $menorN;
echo "\n";

espacamento();

function espacamento() {
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

function subs($x): void {
    $substituicao = array(1 => "primeiro",
    2 => "segundo",
    3 => "terceiro",
    4 => "quarto",
    5 => "quinto",
    6 => "sexto",
    7 => "sétimo",
    8 => "oitavo",
    9 => "nono",
    10 => "décimo");

    echo $substituicao[$x];
}

?>