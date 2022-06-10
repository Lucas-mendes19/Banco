<?php

require_once "autoload.php";

    use Projeto\Banco\Modelo\Cpf;
    use Projeto\Banco\Modelo\Pessoa;
    use Projeto\Banco\Modelo\Funcionario\Funcionario;
    use Projeto\Banco\Modelo\Funcionario\Gerente;
    use Projeto\Banco\Modelo\Funcionario\Diretor;
    use Projeto\Banco\Modelo\Funcionario\Desenvolvedor;
    use Projeto\Banco\Modelo\Funcionario\EditorVideo;
    use Projeto\Banco\Modelo\Endereco;
    use Projeto\Banco\Modelo\Conta\Titular;
    use Projeto\Banco\Modelo\Conta\Conta;
    use Projeto\Banco\Modelo\Conta\Poupanca;
    use Projeto\Banco\Modelo\Conta\Corrente;
    use Projeto\Banco\Service\ControladorBonificacao;
    use Projeto\Banco\Service\Autenticador;

    $cpf         = new Cpf('021.716.486-27');
    $pessoa      = new Pessoa("Lucas", $cpf);
    $endereco    = new Endereco('Coronel Fabriciano', 'Melo Viana', 'Rua Maria de lourdes de Jesus', '102');
    $titular     = new Titular($cpf, 'Lucas Mendes', $endereco);

    $funcionario_1 = new Desenvolvedor("Lucas", $cpf, 2000);
    $funcionario_1->sobeNivel();

    $funcionario_2 = new Gerente("Lucas", $cpf, 2000);
    $funcionario_3 = new Diretor("Lucas", $cpf, 5000);
    $funcionario_4 = new EditorVideo("Lucas", $cpf, 5000);

    $funcionario_3->podeAutenticar('1234');

    $autenticador = new Autenticador();
    $autenticador->tentaLogin($funcionario_3, '122234');

    // $bonificacao = new ControladorBonificacao();

    // $bonificacao->adicionarBonificacao($funcionario_1);
    // $bonificacao->adicionarBonificacao($funcionario_4);
    // $bonificacao->adicionarBonificacao($funcionario_2);
    // $bonificacao->adicionarBonificacao($funcionario_3);
    // echo $bonificacao->recuperarBonificacaoTotal();

    // $contaCorrente = new Corrente($titular);
    // $contaCorrente->depositar(200);

    // $contaPoupanca = new Poupanca($titular);

    // $contaCorrente->transferir(100,$contaPoupanca);

    // echo $contaCorrente->exibirSaldo();
    // echo "<br>";
    // echo $contaPoupanca->exibirSaldo();
    // // $conta->depositar(200);
 
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