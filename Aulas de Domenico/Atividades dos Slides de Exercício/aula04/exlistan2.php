<?php

espacamento();

(string)$palavra1 = readline("Oie, me passa a primeira das cinco palavras aí: ");

espacamento();

(string)$palavra2 = readline("Oie, me passa a segunda das cinco palavras aí: ");

espacamento();

(string)$palavra3 = readline("Oie, me passa a terceira das cinco palavras aí: ");

espacamento();

(string)$palavra4 = readline("Oie, me passa a quarta das cinco palavras aí: ");

espacamento();

(string)$palavra5 = readline("Oie, me passa a quinta das cinco palavras aí: ");

espacamento();

$elementos = array(1 => $palavra1, 2 => $palavra2, 3 => $palavra3, 4 => $palavra4, 5 => $palavra5);

$vazio = array();

for($i = 1; $i < 6; $i++){
    $vazio[$i] = $elementos[$i];
}

foreach ($vazio as $chave => $v) {
    if ($v == $vazio[5]) {
        echo $vazio[$chave] . ".";
    } else {
        echo $v . ", ";
    }
}

espacamento();

function espacamento() {
    echo "\n";
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>