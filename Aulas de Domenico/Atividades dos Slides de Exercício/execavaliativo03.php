<?php

//se as duas regras forem implementadas

echo "\n";

for($i = 1980; $i <= 2024; $i++){
    if($i % 4 == 0 & $i % 100 != 0 || $i % 400 == 0){
        echo $i . " ";
    }
}

echo "\n";

//se a regra do 100 for implementada

echo "\n";

for($i = 1980; $i <= 2024; $i++){
    if($i % 4 == 0 & $i % 100 != 0){
        echo $i . " ";
    }
}

echo "\n";

//se a regra do 400 for implementada

echo "\n";

for($i = 1980; $i <= 2024; $i++){
    if($i % 4 == 0 || $i % 400 == 0){
        echo $i . " ";
    }
}

echo "\n";
echo "\n";

?>