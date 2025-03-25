<?php

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
echo "\n";

print(par_impar($n1));
print(par_impar($n2));
print(par_impar($n3));
print(par_impar($n4));
print(par_impar($n5));
print(par_impar($n6));
print(par_impar($n7));
print(par_impar($n8));
print(par_impar($n9));
print(par_impar($n10));

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

function par_impar($x) {
    if($x % 2 == 0) {
        return "O número " . $x . " é par!" . "\n";
    } else {
        return "O número " . $x . " é ímpar!" . "\n";
    }
}

?>