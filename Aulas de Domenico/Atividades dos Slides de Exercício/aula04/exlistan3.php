<?php

espacamento();

echo "Informe os elementos de A: \n";

espacamento();

$vetA = array();
for ($i = 0; $i < 5; $i++) {
    $num = readline("Informe um número: ");
    array_push($vetA, $num);

    espacamento();
}

espacamento();

echo "Informe os elementos de B: \n";

espacamento();

$vetB = array();
for ($i = 0; $i < 5; $i++) {
    $num = readline("Informe um número: ");
    array_push($vetB, $num);

    espacamento();
}

$vetC = array();

foreach($vetA as $a) {
    if(search_num($vetB, $a)) {
        array_push($vetC , $a);
    }
}

$vetD = array();

foreach($vetA as $a) {
    if(! search_num($vetD, $a)) {
        array_push($vetD, $a);
    }
}
foreach($vetB as $b) {
    if(! search_num($vetD, $b)) {
        array_push($vetD, $b);
    }
}

echo "Vetor C - Intersecção de A e B = ";

foreach($vetC as $c) {
    print_r($c . ", ");
}

echo "\n";

echo "Vetor D - União de A e B = ";

foreach($vetD as $d) {
    print_r($d . ", ");
}

echo "\n";

espacamento();

function search_num(array $vet, int $num) {
    foreach($vet as $v) {
        if($v == $num) {
            return true;
        }
    }
    
    return false;

}

function espacamento() {
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>