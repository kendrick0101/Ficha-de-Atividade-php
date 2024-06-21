<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>
    <h1>Verificar Sexo e Idade</h1>

<?php

$nome = 'Mayna';

$sexo = 'F';

$idade = 17;


if ($sexo == 'F' && $idade < 25) {
  echo "$nome: ACEITA";
} else {
  echo "$nome: NÃO ACEITA";
}

?>
<style>
    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>