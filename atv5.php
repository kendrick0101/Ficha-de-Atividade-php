<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>
    <h1>Verificar a classificação do triangulo</h1>

<?php

$lado1 = 1;
$lado2 = 2;
$lado3 = 4;


if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
  
  if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "Triângulo equilátero";

  } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    echo "Triângulo isósceles";

  } else {
    echo "Triângulo escaleno";

  }
} else {
  echo "Os lados não formam um triângulo válido";
}

?>
<style>
    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>