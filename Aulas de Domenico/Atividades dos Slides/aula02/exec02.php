<?php 

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

$x = readline("Eae maninho, me passa um número aí: ");
$intermediario = $x - 1;

echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";

echo "O número ancestral é: " . $x . "\n" . "Seguem os antecessores até 0: ";

while ($intermediario > 0) {
    if ($intermediario == 1) {
        echo $intermediario . ".";
        $intermediario--;
    } else {
        echo $intermediario . ", ";
        $intermediario--;
    }
}

echo "\n";
echo "\n";
echo "--------------------------------------------------------------------" . "\n";
echo "\n";