<?php

$dados = [
    [
        "id" => "12",
        "nome" => "lucas"
    ],
    [
        "id" => "12242",
        "nome" => "mendes"
    ],
];

$arquivo = 'teste.json';
$json = json_encode($dados);
$file = fopen(__DIR__ . '/' . $arquivo,'w');
fwrite($file, $json);
fclose($file);

// $homepage = json_decode(file_get_contents('teste.json'));
// unset($homepage[0]);
// print_r($homepage);

$headers = [
    'Content-type: application/json',
    'Content-length'.strlen($json),
];

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => $headers,
        'content' => $json
    ],
]);

$url = "db.json";

echo file_get_contents($url,true,$context);