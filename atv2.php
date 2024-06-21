<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 2</title>
</head>
<body>
    <h1>Verificar se valor é divisível</h1>
<?php

$n = 11;


if ($n % 10 == 0) {
  echo "O número $n é divisível por 10.";

} elseif ($n % 5 == 0) {
  echo "O número $n é divisível por 5.";
} elseif ($n % 2 == 0) {
  echo "O número $n é divisível por 2.";
} else {
  echo "O número $n não é divisível por 10, 5 ou 2.";
}

?>
<style>
    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>