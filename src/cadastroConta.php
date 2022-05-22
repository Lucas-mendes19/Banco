<?php
require_once 'Conta.php';
require_once 'Titular.php';
require_once 'Cpf.php';

$nome = $_POST['nome'];
$cpf  = $_POST['cpf'];

$cpf     = new Cpf($cpf);
$titular = new Titular($cpf,"Lucas Mendes");
$conta   = new Conta($titular);
$conta->recuperarNomeTitular();
$conta->depositar(200);

$dados = [
    $conta->recuperarCpfTitular() =>
    [
        $conta->recuperarNomeTitular(),
        $conta->exibirSaldo(),
    ]
];

$db = '../api/db.json';

$recuperar_dados = json_decode(file_get_contents($db),true);
$recuperar_dados[] = $dados;

print_r($recuperar_dados);
 
$json = json_encode($dados);
$file = fopen(__DIR__ . '/' . $arquivo,'w');
fwrite($file, $json);
fclose($file);