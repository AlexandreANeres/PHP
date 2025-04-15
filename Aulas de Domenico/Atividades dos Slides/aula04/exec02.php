<?php

espacamento();

$sujeito01 = array("nome" => "Manuel de Medeiros",
                   "endereco" => "Rua das Acácias",
                   "cidade" => "Foz do Iguaçu",
                   "UF" => "PR");

$sujeito02 = array("nome" => "Juliana de Amaral",
                   "endereco" => "Rua dos Pinheiros",
                   "cidade" => "Florianópolis",
                   "UF" => "SC");

$sujeito03 = array("nome" => "Rodrigo Baidek",
                   "endereco" => "Rua Dom Pedro I",
                   "cidade" => "Petrópolis",
                   "UF" => "RJ");

$sujeito04 = array("nome" => "Fabíola da Silva",
                   "endereco" => "Rua Chile",
                   "cidade" => "Guarulhos",
                   "UF" => "SP");

$sujeitos = array($sujeito01, $sujeito02, $sujeito03, $sujeito04);

for($i = 0; $i < 4; $i++) {
    foreach($sujeitos[$i] as $chave => $p) {
        echo $chave . " = " . $p . " | ";
    }
    espacamento();
}

function espacamento() {
    echo "\n";
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}

?>