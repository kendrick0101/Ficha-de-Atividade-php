<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>
    <h1>Imprimir Numero em ordem Decrescente</h1>
<?php

$numero1 = 90;
$numero2 = 85;
$numero3 = 100;


$numeros = array($numero1, $numero2, $numero3);

rsort($numeros);

echo implode(", ", $numeros);

?>
<style>
    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>