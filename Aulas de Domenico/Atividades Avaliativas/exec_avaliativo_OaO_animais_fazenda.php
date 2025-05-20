<?php

//Trocar sleep por um readline vazio -> O programa só continua quando o usuário apertar enter.

class Animal {

    public $especie;
    public $numeroPatas;
    public $tipoMovimento;
    public $tipoPele;
    public $tipoBoca;

    function __construct($animal) {
        $this -> especie = $animal;
    }

    function emiteSom() {
        if ($this -> especie == 'Cachorro') {
            echo "Au au au\n";
        } else if ($this -> especie == 'Porco') {
            echo "Roinc roinc\n";
        } else if ($this -> especie == 'Galinha') {
            echo "Pó pó pó";
        } else if ($this -> especie == 'Ovelha') {
            echo "Béééééé";
        } else if ($this -> especie == 'Cobra') {
            echo "shhhhhhhhhh";
        } else if ($this -> especie == 'Gato') {
            echo "Meow Meow";
        } else if ($this -> especie == 'Pato') {
            echo "Quack Quack";
        } else if ($this -> especie == 'Cavalo') {
            echo "Irhuul Irhuul";
        } else if ($this -> especie == 'Bem-Te-Vi') {
            echo "bimtivi bimtivi";
        } else if ($this -> especie == 'Burro') {
            echo "Ihrhrhrhrh";
        } else {
            espacamento();
            echo "Esse animal não está registrado no sistema :(";
            espacamento();
        }
    }

    function qtdPatas() {
        if ($this -> especie == 'Cachorro' || 'Gato' || 'Cavalo' || 'Burro' || 'Ovelha' || 'Porco' ) {
            $this -> numeroPatas = 4;
        } else if ($this -> especie == 'Bem-Te-Vi' || 'Pato' || 'Galinha') {
            $this -> numeroPatas = 2;
        } else if ($this -> especie == 'Cobra') {
            $this -> numeroPatas = 0;
        } else {
            espacamento();
            echo "Esse animal não está registrado no sistema :(";
            espacamento();
        }

        echo $this -> numeroPatas;
    }

    function tipoMovimento() {
        if ($this -> especie == 'Cachorro' || 'Gato' || 'Cavalo' || 'Burro' || 'Ovelha' || 'Porco' || 'Cobra' || 'Pato' || 'Galinha') {
            $this -> tipoMovimento = 'Terreno';
        } else if ($this -> especie == 'Bem-Te-Vi') {
            $this -> tipoMovimento = 'Aéreo';
        } else {
            espacamento();
            echo "Esse animal não está registrado no sistema :(";
            espacamento();
        }

        echo $this -> tipoMovimento;
    }

    function Pele() {
        if ($this -> especie == 'Cachorro' || 'Gato' || 'Cavalo' || 'Burro' || 'Ovelha') {
            $this -> tipoPele = 'Pelo';
        } else if ($this -> especie == 'Porco') {
            $this -> tipoPele = 'Carne';
        } else if ($this -> especie == 'Cobra') {
            $this -> tipoPele = 'Escamas';
        } else if ($this -> especie == 'Pato' || 'Galinha' || 'Bem-Te-Vi') {
            $this ->tipoPele = 'Asas';
        } else {
            espacamento();
            echo "Esse animal não está registrado no sistema :(";
            espacamento();
        }

        echo $this -> tipoPele;
    }

    function Boca() {
        if ($this -> especie == 'Cachorro' || 'Gato' || 'Burro' || 'Cavalo' || 'Ovelha' || 'Porco') {
            $this -> tipoBoca = 'Focinho';
        } else if ($this -> especie == 'Pato' || 'Galinha' || 'Bem-Te-Vi') {
            $this -> tipoBoca = 'Bico';
        } else if ($this -> especie == 'Cobra') {
            $this -> tipoBoca = 'Narinas';
        } else {
            espacamento();
            echo "Esse animal não está registrado no sistema :(";
            espacamento();
        }

        echo $this -> tipoBoca;
    }
}

espacamento();

echo "BEM VINDO À MINHA FAZENDA!!!!!! Me fala um dos animais que eu citar aqui que eu te passo todos os dados (que eu considerei interessantes comentar)... \n\n OBS: É só digitar como foi escrito no catálogo e o sistema já identifica a sua solicitação, então cuidado com erros! \n";

$wait = readline("Pressione enter para continuar: ");

espacamento();

echo "CATÁLOGO: \n\n";

echo "1. Cachorro \n
      2. Gato \n
      3. Cavalo \n
      4. Burro \n
      5. Galinha \n
      6. Pato \n
      7. Bem-Te-Vi \n
      8. Cobra \n
      9. Porco \n
      10. Ovelha\n";

espacamento();

$animal = readline("R: ");

espacamento();

$selecao = new Animal($animal);

echo "O som que o animal " . $selecao -> especie . " produz é: ";
$selecao -> emiteSom();
echo ".\n";

echo "O animal em questão tem ";
$selecao -> qtdPatas();
echo " patas.\n";

echo "Além disso, a pelagem dele é caracterizada como: ";
$selecao -> Pele();
echo ".\n";

echo "O bico dele está na aba: ";
$selecao -> Boca();
echo ".\n";

echo "E o tipo de movimento dele é: ";
$selecao -> tipoMovimento(); 
echo ".\n";

espacamento();

echo "O catálogo exige que o cliente solicite os dados de pelo menos 5 animais! Manda aí o dado dos próximos? \n";

espacamento();

for($i = 0; $i < 4; $i++) {

    $wait = readline("Pressione enter para continuar: ");

    echo "CATÁLOGO: \n\n";

    echo "1. Cachorro \n
        2. Gato \n
        3. Cavalo \n
        4. Burro \n
        5. Galinha \n
        6. Pato \n
        7. Bem-Te-Vi \n
        8. Cobra \n
        9. Porco \n
        10. Ovelha";

    espacamento();

    $animal = readline("R: ");

    espacamento();

    $selecao = new Animal($animal);

    echo "O som que o animal " . $selecao -> especie . " produz é: ";
    $selecao -> emiteSom();
    echo ".\n";

    echo "O animal em questão tem ";
    $selecao -> qtdPatas();
    echo " patas.\n";

    echo "Além disso, a pelagem dele é caracterizada como: ";
    $selecao -> Pele();
    echo ".\n";

    echo "O bico dele está na aba: ";
    $selecao -> Boca();
    echo ".\n";

    echo "E o tipo de movimento dele é: ";
    $selecao -> tipoMovimento(); 
    echo ".\n";

    espacamento();

}

function espacamento(): void {
    echo "\n";
    echo "--------------------------------------------------------------------" . "\n";
    echo "\n";
}