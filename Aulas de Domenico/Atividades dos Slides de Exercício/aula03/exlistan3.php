<?php

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";


(string)$joia = readline("Eae, esse programa vai ler algumas informações suas e depois vai exibir tudo bonitinho, beleza? \n Jóia? (s/n):  ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

if ($joia == "s") {

echo "Agora, quero que você me forneça os seguintes dados (Vou passar por eles um de cada vez): \n";

(string)$nome = readline("O nome da sua cidade: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

(string)$habitantes = readline("A quantidade de habitantes na sua cidade: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

(string)$area = readline("A área da sua cidade: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

(string)$altitude = readline("A altitude da sua cidade em relação ao mar: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

(string)$estado = readline("O estado em que sua cidade se localiza: ");

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "Perfeito! O registro que configurei da sua cidade é: \n \n";

echo $nome . " | " . $habitantes . " | " . $area . " | " . $altitude . " | " . $estado . ".";

} else if ($joia == "n") {

    echo "Que pena, espero que você mude de ideia e volte aqui depois! \n";

} else {
    echo "Resposta inválida! Digite s ou n.\n";
}

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

?>