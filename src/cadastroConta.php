<script>
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../api/db.json", true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);;
        }
    };
    var data = {some: "thing"};
    xhttp.send(JSON.stringify(data));
</script>

<?php

echo $data = json_decode(file_get_contents("../api/db.json"), true);
// require_once 'Conta.php';
// require_once 'Titular.php';
// require_once 'Cpf.php';

// $nome = $_POST['nome'];
// $cpf  = $_POST['cpf'];

// $cpf     = new Cpf($cpf);
// $titular = new Titular($cpf,"Lucas Mendes");
// $conta   = new Conta($titular);
// $conta->recuperarNomeTitular();
// $conta->depositar(200);

// $dados = [
//     $conta->recuperarCpfTitular() =>
//     [
//         $conta->recuperarNomeTitular(),
//         $conta->exibirSaldo(),
//     ]
// ];

// $db = '../api/db.json';

// $recuperar_dados = json_decode(file_get_contents($db),true);
// $recuperar_dados[] = $dados;

// var_dump($recuperar_dados);
 
// $json = json_encode($recuperar_dados);
// $file = fopen(__DIR__ . '/' . $db,'w');
// fwrite($file, $json);
// fclose($file);