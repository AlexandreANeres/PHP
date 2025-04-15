<?php

$sabores = array("Chocolate" => 1, "Morango" => 2, "Baunilha" => 3, "Leite Condensado" => 4, "Misto" => 5);
$tamanho = array("Muito Pequeno" => 1, "Pequeno" => 2, "Médio" => 3, "Grande" => 4, "Muito Grande");
$cobertura = array("Chocolate" => 1, "Morango" => 2, "Baunilha" => 3, "Leite Condensado" => 4, "Misto" => 5);
$confeitti = array("Flocos" => 1, "Frutas" => 2, "Ketchup" => 3, "Tubo Doce" => 4, "Balinha"=> 5);

espacamento();

echo "Boa tarde! Bem vindo a sorveteria paulista mais famosa do Brasil!!! Dá uma olhada no nosso cardápio: \n";

espacamento();

echo "SABORES \n \n";

imprimir_array($sabores);

echo "TAMANHO \n \n";

imprimir_array($sabores);

echo "COBERTURA \n \n";

imprimir_array($sabores);

echo "CONFEITTI \n \n";

imprimir_array($sabores);

function imprimir_array(array $dados) {
    foreach ($dados as $escolha => $numero) {
        echo $escolha . " | " . $numero ."\n";
    }

    espacamento();
}

function espacamento() {
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}