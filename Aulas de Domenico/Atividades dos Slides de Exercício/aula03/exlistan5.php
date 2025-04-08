<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

(int)$n = readline("Oie! Dá uma digitada aí e me escreve um número aleatório (vou exibir todos os divisores dele até 1, só lembra que o número deve ser positivo): ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "Os divisores de $n são: \n";

if ($n < 0) {
    echo "Número inválido! Digite um número positivo.\n";
} else {

$limite = ceil($n/2); //nenhum divisor de um número será maior do que a metade do dividendo (Sacada top)
for ($i = $limite; $i > 0; $i--) {
    
    if ($i == 1) {
        echo "$i.\n";
    } else if (divisaoExata($n, $i)) {
        echo "$i, ";
    } else {
        echo "";
    }
}
}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

function divisaoExata($dividendo, $divisor) {

    if ($dividendo % $divisor == 0) {
        return true;
    } else {
        return false;
    }

}

?>