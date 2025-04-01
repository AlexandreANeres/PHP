<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";

for ($i = 1; $i <= 5; $i++) {

    echo "\n";

    $nome = readline("Oi! Coloca o seu nome! ( Temos espaço pra " . 6 - $i . " usuários :D ) Bem vindo usuário $i: ");
    $peso = (float) readline("Digita o peso de $nome (em quilos): ");
    $altura = (float) readline("Digita a altura de $nome (em metros): ");

    $imc = $peso / ($altura * $altura);

    echo "\n$nome tem peso $peso kg, altura $altura metros e IMC " . number_format($imc, 2) . "\n";
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
}

echo "\n";

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";