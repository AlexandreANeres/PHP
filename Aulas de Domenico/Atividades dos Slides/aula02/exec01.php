<?php

$cosnt = 0;

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$n1 = readline("Me passa um número pra iniciar o código!" . "\n");
$n2 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n3 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n4 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n5 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n6 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n7 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n8 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n9 = readline("Me passa outro número pra acrescentar ao código!" . "\n");
$n10 = readline("Me passa um último número pra que eu finalize o código!" . "\n");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";

for ($i = 0; $i <= 10; $i++) {

    if ($i == 0) {
        $const = $n1;
    } else if ($i == 1) {
        $const = $n2;
    } else if ($i == 2) {
        $const = $n3;
    } else if ($i == 3) {
        $const = $n4;
    } else if ($i == 4) {
        $const = $n5;
    } else if ($i == 5) {
        $const = $n6;
    } else if ($i == 6) {
        $const = $n7;
    } else if ($i == 7) {
        $const = $n8;
    } else if ($i == 8) {
        $const = $n9;
    } else if ($i == 9) {
        $const = $n10;
    } else {
        
    }

    if ($const >= 0) {
        echo "\n" . "O número: " . $const . " É positivo!";
    } else if ($const < 0) {
        echo "\n" . "O número: " . $const . " É negativo!";
    } else {
        exit;
    }

}

echo "\n";
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";