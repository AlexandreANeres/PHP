<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "Oie, preciso de um número qualquer (positivo), o objetivo do meu programa é verificar se o número que você me passou é primo. (O meu programa vai encerrar assim que o valor que você digitar for melhor que dois) \n \n Que número você quer verificar? \n \n";
(int)$numero = readline("R: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

if ($numero < 2) {

    echo "Esse número já é menor que dois, adios amigo! \n";

    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";

    exit;

} else {

    if (verificador($numero) == false) {
        echo "O número $numero não é primo ";
    } else if (verificador($numero) == true) {
        echo "O número $numero é primo! ";
    }

    echo "\n";

    $numero = 100;

    while ($numero >= 2) {

        echo "\n";
        echo "--------------------------------------------------------------------" . "\n";
        echo "\n";

        echo "Tem interesse em continuar o código? \n \n Se sim: Digita um número maior que 2, daí ele vai continuar verificando. \n Se não: Digita um número menor do que 2 e ele para :D \n \n";

        $numero = readline("R: ");

        echo "\n";
        echo "--------------------------------------------------------------------" . "\n";
        echo "\n";

        if (!verificador($numero)) { 
            echo "O número $numero não é primo " . "\n";
        } else if (verificador($numero)) {
            echo "O número $numero é primo! " . "\n";
        }
    }

}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "Esse número é menor que dois, obrigado por testar meu programa! Adios amigo! \n";

function verificador($numero) {
    
    for($i = $numero - 1; $i > 1; $i--) { //looping que vai do número digitado ao zero, verificando se no intervalo desses 2 valores existe algum divisor (o que desconfiguraria o número como primo)

        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;

}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";


?>


