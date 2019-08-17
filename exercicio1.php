<?php


/*exercicio 1 */

$tempoviagem = readline ("digite tempo de duracao da viagem: ");
$velocmedia = readline ("digite a velocidade media: ");

$distancia = $tempoviagem * $velocmedia;
echo "distancia percorrida: " . $distancia . PHP_EOL;
$litros_usados = $distancia / 12;

$resultado = $litros_usados;

echo "litros usados foram:  " . $resultado . PHP_EOL;






?>