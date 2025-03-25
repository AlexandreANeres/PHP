<?php

(double)$valor_total = 0;
(double)$valor_contribuicao_total = 0;
(double)$quantidade_alunos= 0;
(string)$interesse = "não";

echo"\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

(int)$quantidade_alunos = readline("Me passa a quantidade de alunos da sua sala!" . " ");

if ($quantidade_alunos == 0 | $quantidade_alunos < 0) {
    echo "Não tem aluno na sala!" . "\n";
} else {
    $interesse = readline("Tens interesse em contribuir?" . " ");
    if ($interesse == "sim") {

    (double)$valor_contribuicao = readline("Me passa o valor da contribuição!" . " ");
    (double)$valor_total = $valor_contribuicao_total + $valor_contribuicao;

    } 
    else {
        echo "Ok, sem problemas!" . "\n";
        echo "--------------------------------------------------------------------" . "\n";
        (double)$valor_total = $valor_total + $valor_contribuicao_total;
    }

    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";

    while($interesse == "sim") {
    $interesse = readline("Tens interesse em contribuir novamente?" . " ");
    if ($interesse == "sim") {

    (double)$valor_contribuicao = readline("Me passa o valor da contribuição!" . " ");
    (double)$valor_total = $valor_total + $valor_contribuicao;

    } 
    else {
        echo "Ok, sem problemas!" . "\n";
        (double)$valor_total = $valor_total + $valor_contribuicao_total;
    }
}
}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "O valor total arrecadado é: " .  (double)$valor_total . "\n" . "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

?>


