<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpf     = new Cpf('021.716.486-27');
$titular = new Titular($cpf, 'Lucas Mendes');
$conta   = new Conta($titular);

echo $conta->recuperarCpfTitular() . PHP_EOL;

echo $conta->recuperarNomeTitular() . PHP_EOL;

$conta->depositar(200);
echo $conta->exibirSaldo() . PHP_EOL;

echo Conta::exibirNumeroContas();