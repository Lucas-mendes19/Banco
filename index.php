<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

// $cpf     = new Cpf('021.716.486-27');
// $titular = new Titular($cpf, 'Lucas Mendes');
// $conta   = new Conta($titular);

// echo $conta->recuperarCpfTitular() . PHP_EOL;

// echo $conta->recuperarNomeTitular() . PHP_EOL;

// $conta->depositar(200);
// echo $conta->exibirSaldo() . PHP_EOL;

// echo Conta::exibirNumeroContas();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <title>Banco</title>
    </head>
    <body>
        <form action="src/cadastroConta.php" class="cadastro-conta" method="post">
            <input type="text" name="nome" id="">
            <input type="text" name="cpf" id="">
            <input type="submit" value="Enviar">
        </form>
        <div class="exibir-contas">
            <table>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
            </table>
        </div>
    </body>
</html>