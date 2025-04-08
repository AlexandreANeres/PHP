<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$user = readline("Oi, o que gostaria de fazer nesse programinha? \n \n 1 -> Calcular a área de um retângulo (Preciso das medidas da base [c] e da altura [h] dele) \n \n 2 -> Calcular o perímetro de um retângulo (Preciso de quatro números, que são os lados do retângulo [a], [b], [c] e [d]) \n \n R: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

if ($user == "1") {
    $c = readline("Qual a medida da base [c] do retângulo? ");
    $h = readline("Qual a medida da altura [h] do retângulo? ");

    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";

    $area = $c * $h;
    echo "A área do retângulo é: $area \n";

} else  if ($user == "2") {
    $a = readline("Oi, me diz o valor do lado [a] do retângulo: ");
    $b = readline("Oi, me diz o valor do lado [b] do retângulo: ");
    $c = readline("Oi, me diz o valor do lado [c] do retângulo: ");
    $d = readline("Oi, me diz o valor do lado [d] do retângulo: ");

    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";

    $perimetro = $a + $b + $c + $d;
    echo "O perímetro do retângulo é: $perimetro \n";

} else {
    echo "Número inválido! Digite 1 ou 2.\n";
}

    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";

?>
   