<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$x = readline("Me passa um número pra iniciar o código! (Dica: vou fazer o fatorial dele): " . " ");

if ($x == "0") {
    echo "O fatorial de 0 é 1" . "\n";
    exit;
} else {

    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";

    echo "O fatorial de " . $x . " é: " . $x . "! = " . fatorial($x)  . "\n"; 

}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

function fatorial($x) {
        $fatorial = 1;

        for ($i = $x; $i > 0; $i--) {
            $fatorial = $i * $fatorial;
            
        }
        return $fatorial;
}

?>