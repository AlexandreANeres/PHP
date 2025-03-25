<?php

echo"\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$x = readline("Me passa um primeiro número pra startar o programa! (eu encontro os multiplos de 5 no intervalo do primeiro para o segundo número)" . "\n");
echo "\n";
echo "--------------------------------------------------------------------" . "\n";


$y = readline("Me passa um segundo número pra finalizar o programa". "\n");
echo "\n"; 
echo "--------------------------------------------------------------------" . "\n";

if ($x > $y) {
    echo "O número " . $x . " é maior que o número " . $y . "\n" . "Torne o primeiro número sempre menor do que o segundo!!" . "\n";
} elseif ($x == $y) {
    echo "Os números são iguais!" . "\n" . "Tente novamente!" . "\n";
} else {
    echo "O número " . $x . " é menor que o número " . $y . "\n" . "Portanto, vamos ver os múltiplos de 5 entre eles!" . "\n" . "\n";

    for($i = $x + 1; $i < $y; $i++) {
        if($i % 5 == 0) {
            echo "O número " . $i . " é múltiplo de 5 (Ou é divisível por 5)!" . "\n";
    }
    }
}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

?>