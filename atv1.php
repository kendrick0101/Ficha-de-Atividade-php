<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 1</title>
</head>
<body>
    <h1>Impressão de dois valores</h1>
<?php

$n1 = 10 ;
$n2 = 11 ;

$soma = $n1 + $n2;

if ($soma > 20) {

  $resultado = $soma + 8;

} else {
  
  $resultado = $soma - 5;
}

echo "O resultado é: $resultado";


?>
<style>
    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>