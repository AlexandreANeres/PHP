<?php

$while_n = 1;
$dowhile_n = 1;

echo "\n";
echo "Impressão de 1 a 10 -> While\n";

while($while_n <= 10){
    echo $while_n;
    $while_n++;
}

echo "\n";
echo "\n";
echo "----------------------------------------------";
echo "\n";
echo "\n";
echo "Impressão de 1 a 10 -> DoWhile\n";

do {
    echo $dowhile_n;
    $dowhile_n++;
} while ($dowhile_n <= 10);

echo "\n";
echo "\n";
echo "----------------------------------------------";
echo "\n";
echo "\n";

echo "Impressão de 1 a 10 -> For\n";

for($i = 1; $i <= 10; $i++){
    echo $i;
}

echo "\n";
echo "\n";

?>
