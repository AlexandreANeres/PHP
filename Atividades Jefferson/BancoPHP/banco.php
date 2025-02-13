<?php

$clientes = [];
$contas   = [];

function cadastrarCliente(&$clientes, string $nome, string $cpf, string $telefone): bool {
    if(!validar_telefone($telefone)){
        print("Telefone inválido. Seu número de telefone deve estar no formato (xx) xxxxx-xxxx.\n");
        return false;
    }

    if(!validar_cpf($cpf)){
        print "CPF inválido.\n ";
        return false;
    }

    $cliente = [
        "nome" => $nome,
        "cpf"  => $cpf,
        "telefone" => $telefone
    ];
    
    $clientes[] = $cliente;
    return true;
}

function validar_telefone(string $telefone): bool {
    // Expressão regular para validar o formato (xx) xxxxx-xxxx
    return preg_match('/^\(\d{2}\) \d{4,5}-\d{4}$/', $telefone);
}

function cadastrarConta(&$contas, $cpfCliente): string {
    $conta = [
        "numeroConta" => uniqid(),
        "cpfCliente" => $cpfCliente,
        "saldo" => 0
    ];
    
    $contas[] = $conta;
    return $conta['numeroConta'];
}

function depositar(&$contas, $numeroConta, $quantia){
    if($quantia < 0){
        print("Não é possível depositar valores negativos.\n");
        return;
    }
    
    foreach ($contas as &$conta){
        if($conta['numeroConta'] == $numeroConta){
            $conta['saldo'] += $quantia;
            print "Depósito de R$$quantia realizado na conta $numeroConta.\n";
            return;
        }
    }
    print "Conta não encontrada.\n";
}

function sacar(&$contas, $numeroConta, $quantia){
    foreach ($contas as &$conta){
        if($conta['numeroConta'] == $numeroConta){
            if($quantia > $conta['saldo']){
                print("Sua conta não tem saldo suficiente para realizar a operação.\n");
                break;               
            }
            if($quantia < 0){
                print "Não é possível sacar valores negativos.\n";
                break;
            }
            $conta['saldo'] -= $quantia;
            print "Saque de R$$quantia realizado na conta $numeroConta.\n";
            return;
        }
    }
    print "Conta $numeroConta não encontrada.\n";
}

function consultarSaldo(&$contas, $numeroConta){
    foreach ($contas as $conta){
        if($conta['numeroConta'] == $numeroConta){
            print "Saldo da conta {$numeroConta}: R$" . $conta['saldo'] . "\n";
            return;
        }
    }
    print 'Conta não encontrada.\n';
}

function validar_cpf(string $cpf): bool {
    // Remover caracteres não numéricos
    $cpf = preg_replace('/\D/', '', $cpf);

    if(strlen($cpf) != 11){
        return false;
    }

    $soma = 0;
    for ($i=0; $i < 9; $i++) { 
        $soma += $cpf[$i] * (10 - $i);
    }
    
    $valor = (int) ($soma / 11);
    $resto = $soma % 11;        

    if($resto < 2) {
        $digito1 = 0;
    } else if ($resto >= 2) {
        $digito1 = (11 - $resto);
    }
    
    $soma2 = 0;
    for ($i=0; $i < 9; $i++) { 
        $soma2 += ($cpf[$i] * (11 - $i));
    }
    $soma2 += ($digito1 * 2);

    $valor2 = (int) ($soma2 / 11);
    $resto2 = $soma2 % 11;

    if($resto2 < 2) {
        $digito2 = 0;
    } else if ($resto2 >= 2) {
        $digito2 = (11 - $resto2);
    }

    if ($digito1 != $cpf[9]) {
        return false;
    } else {
        if ($digito2 == $cpf[10]) {
            return true;
        } else {
            return false;
        } 
    }
    return false;
}

function print_box($message) {
    $lines = explode("\n", $message);
    $width = max(array_map('strlen', $lines));
    $border = str_repeat('-', $width + 4);

    print "$border\n";
    foreach ($lines as $line) {
        printf("| %-${width}s |\n", $line);
    }
    print "$border\n";
}

do {
    print_box("Bem-vindo ao Banco Segurança Total, onde seus dados estão seguros!");
    sleep(2);

    print_box("O que gostaria de fazer?\n1)Cadastrar\n2)Criar conta (necessário ter um cadastro) \n3)Depositar\n4)Sacar\n5)Consultar saldo\n6)Encerrar operações:  ");
    $resposta = readline("");

    while($resposta < 1 or $resposta > 6){
        $resposta = readline("Resposta inválida. ");
    }

    switch ($resposta) {
        case '1':
            $nome = readline('Informe seu nome: ');
            $cpf = readline((string)'Informe seu CPF (formato: xxx.xxx.xxx-xx ou xxxxxxxxxxx): ');
            $telefone = readline('Informe seu telefone (formato: (xx) xxxxx-xxxx): ');

            if(cadastrarCliente($clientes, $nome, $cpf, $telefone)){
                print_box('Cadastro realizado!');
            } else {
                print_box("Não foi possível realizar o cadastro.");
            }
            break;
        
        case '2':
            $nome = readline('Informe o nome que você cadastrou: ');

            foreach($clientes as $cliente){
                if($cliente['nome'] == $nome){
                    $numeroConta = cadastrarConta($contas, $cliente['cpf']);
                    print_box("Conta cadastrada! O número da sua conta é $numeroConta. Sugiro que anote-o agora!");
                    break;
                } else {
                    print_box('Nome não cadastrado.');
                }
            }
            break;
            
        case '3':
            $numeroConta = readline("Informe o número da sua conta: ");
            $quantia = readline("Informe quanto deseja depositar: ");
            depositar($contas, $numeroConta, $quantia);
            break;
        
        case '4':
            $numeroConta = readline("Informe o número da sua conta: ");
            $quantia = readline("Informe quanto deseja sacar: ");
            sacar($contas, $numeroConta, $quantia);
            break;

        case '5':
            $numeroConta = readline("Informe o número da sua conta: ");
            consultarSaldo($contas, $numeroConta);
            break;
        
        sleep(2);
    }
} while($resposta != 6);

print_box("Obrigado por confiar no Banco Segurança Total!");
?>