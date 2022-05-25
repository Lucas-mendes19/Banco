<?php

require_once "autoload.php";

    use Projeto\Banco\Modelo\Cpf;
    use Projeto\Banco\Modelo\Pessoa;
    use Projeto\Banco\Modelo\Funcionario;

    $cpf = new Cpf('021.716.486-27');
    $pessoa      = new Pessoa("Lucas", $cpf);
    $funcionario = new Funcionario("Lucas", $cpf, "Teste");
    echo $funcionario->recuperarNome();
    // print_r($funcionario);

    // $endereco = new Endereco('Coronel Fabriciano', 'Melo Viana', 'Rua Maria de lourdes de Jesus', '102');
    // $titular  = new Titular($cpf, 'Lucas Mendes', $endereco);
    // $conta    = new Conta($titular);

    // echo $conta->recuperarCpfTitular();
    // echo "<br>";

    // echo $conta->recuperarNomeTitular();
    // echo "<br>";

    // $conta->depositar(200);
    // echo $conta->exibirSaldo();
    // echo "<br>";

    // echo Conta::exibirNumeroContas();

?>
<!-- <!DOCTYPE html>
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
</html> -->