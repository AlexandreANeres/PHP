<?php

espacamento();

$pessoa1 = array("nome" => "Daniel", 
                 "idade" => 27, 
                 "escola" => "IFPR");

$pessoa2 = array("nome" => "Alexandre", 
                 "idade" => 16, 
                 "escola" => "IFPR");

//Matriz

$pessoas = array($pessoa1, $pessoa2);
echo $pessoas[0]["escola"]; //Imprime pessoa1, procura a informação 'escola'

espacamento();

//Imprimir a idade da pessoa 01

echo $pessoa1["idade"];

espacamento();

//Percorrer o array associativo

foreach($pessoa1 as $chave => $p) {
    echo $chave . " = " . $p . " | ";
}

espacamento();

function espacamento() {
    echo "\n";
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>