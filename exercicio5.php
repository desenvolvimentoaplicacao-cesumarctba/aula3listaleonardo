<?php

$fahrenheit  = readline ("digite temperatura em graus Fahrenheit : ");

$celsius = ((($fahrenheit-32)*5)/9);
$kelvin = $celsius + 273.15;

$resultado = $kelvin;
echo "a temperatura em Kelvin é: " . $resultado . PHP_EOL;

?>