<?php

$subject01 = create_subject();
$subject02 = create_subject();
$subject03 = create_subject();
$subject04 = create_subject();

$pessoas = array($subject01, $subject02, $subject03, $subject04);

$pessoaMaisVelha = $pessoas[0];

foreach ($pessoas as $p) {
    if ($p["idade"] > $pessoaMaisVelha["idade"]);
    $pessoaMaisVelha = $p;
}

echo "Dados da pessoa mais velha: \n \n";

print_r($pessoaMaisVelha);

espacamento();
function create_subject(): array {

espacamento();

$nome = readline("Qual o seu nome? ");

espacamento();

$idade = readline("Qual a sua idade? ");

espacamento();

$cidadeNatal = readline("Qual a sua cidade natal? ");

espacamento();

$profissao = readline("Qual a sua profissão? ");

espacamento();

$sujeito = array("nome" => $nome,
                 "idade" => $idade,
                 "cidadeNatal" => $cidadeNatal,
                 "profissão" => $profissao);

return $sujeito;

}

function espacamento() {
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>