<?php

espacamento();

(int)$n = readline("Fala meu mano, me passa um primeiro número aí (todos os números, de preferência, tem que ser inteiros): ");

espacamento();

(int)$n2 = readline("Fala meu mano, me passa um segundo número aí: ");

espacamento();

(int)$n3 = readline("Fala meu mano, me passa um terceiro número aí: ");

espacamento();

(int)$n4 = readline("Fala meu mano, me passa um quarto número aí: ");

espacamento();

(int)$n5 = readline("Fala meu mano, me passa um quinto número aí (tamo na metade): ");

espacamento();

(int)$n6 = readline("Fala meu mano, me passa um sexto número aí: ");

espacamento();

(int)$n7 = readline("Fala meu mano, me passa um sétimo número aí: ");

espacamento();

(int)$n8 = readline("Fala meu mano, me passa um oitavo número aí: ");

espacamento();

(int)$n9 = readline("Fala meu mano, me passa um nono número aí: ");

espacamento();

(int)$n10 = readline("Fala meu mano, me passa um último número aí: ");

espacamento();

$numeros = array($n, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10);

$media = 0;

foreach($numeros as $valor => $v) {
    $media = $media + $v;
}

echo $media / 10;

espacamento();
function espacamento() {
    echo "\n";
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>