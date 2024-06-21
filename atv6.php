<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>
    <h1>Informar o mês equivalente ao numero</h1>

<?php

$n = 12;

if ($n >= 1 && $n <= 12) {
  
  $meses = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
  );

  echo "O mês correspondente é: " . $meses[$n];

} else {
  echo "Não existe mês com este número";

}

?>
<style>
    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>