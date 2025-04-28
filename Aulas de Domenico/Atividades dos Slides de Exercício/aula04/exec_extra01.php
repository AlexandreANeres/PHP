<?php

espacamento();

$numerosA = array();

echo "Buenos dias, informa aí 5 números, vou fazer uma correria e desenrolar eles pelo programa: \n";

espacamento();

for($i = 1; $i < 6; $i++) {
    $numerosA[$i] = readline("Manda aí o " . $i . " número: ");
}

espacamento();

$numerosB = array();
$numerosC = array();
$numerosD = array();

foreach($numerosA as $v) {
    array_push($numerosB, $v);
    array_push($numerosC, $v);
    array_push($numerosD, $v);
}

echo "~ Vetor 1 - Transforma os valores do vetor em Fahrenheit ~\n\n";

$vetor1 = array();

foreach($numerosB as $v) {
    array_push($vetor1, CtoF($v));
}

foreach($vetor1 as $valor) {
    print_r("Resultado pós transformação = " . $valor . "\n");
}

espacamento();

echo "~ Vetor 2 - Tira dos valores do vetor os fatoriais ~\n\n";

foreach($numerosC as $v) {
    fatorial($v);
}

/*

echo "Escolha o modo de cálculo:\n";
echo "1 - Loop\n";
echo "2 - Recursivo\n";
$modo = readline("Digite o número do modo: ");

$numero = (int) readline("Digite o número para calcular o fatorial: ");
$resultado = 0;

if ($modo == 1) {
    $resultado = fatorial_loop($numero);
    echo "\nFatorial de $numero (modo loop) = $resultado\n";
} elseif ($modo == 2) {
    $resultado = fatorial_recursivo($numero);
    echo "\nFatorial de $numero (modo recursivo) = $resultado\n";
} else {
    echo "\nModo inválido!\n";
}

*/

echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "~ Vetor 3 - Aplica os valores do vetor na função: F(X) = (X² + 2X + 4) / (2X) ~\n\n";

$vetor3 = array();

foreach($numerosD as $v) {
    array_push($vetor3, FX($v));
}

foreach($vetor3 as $valor) {
    print_r("Resultado pós transformação = " . $valor . "\n");
}

espacamento();

function verific($num) {
    if($num >= 1) {
        return $num;
    } else if($num < 1) {
        return 0;
    }
}

function fatorial($num) {
    $num = verific($num);

    $valor_inicial = $num;

    echo "!" . $valor_inicial . ": ";

    $multiplicacao = $valor_inicial;

    for($i = 1; $i < $num + 1; $i++) {

        $resultado = $num - $i;

        if ($resultado <= 0) {
            echo $resultado . ".\n";
            echo "R: " . $multiplicacao . "\n\n";
        } else {
            echo $resultado . ", ";
        }

        $multiplicacao = $multiplicacao * $resultado;
    }

}

/*

function fatorial_loop($num) {
    $num = verific($num);

    if ($num == 0) {
        return 1;
    }

    $resultado = 1;
    for ($i = $num; $i >= 1; $i--) {
        $resultado *= $i;
    }

    return $resultado;
}

function fatorial_recursivo($num) {
    $num = verific($num);

    if ($num == 0 || $num == 1) {
        return 1;
    }

    return $num * fatorial_recursivo($num - 1);
} */

function FX($x) {
    $Resultado = ((($x * $x) + (2 * $x) + 4) / ($x * 2));
    return $Resultado;
}
function CtoF($Celsius) {
    $Fahrenheit = (($Celsius * 1.8) + 32);
    return $Fahrenheit;
}

function espacamento() {
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>