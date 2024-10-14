<?php
// Escribe un programa que, dados dos números, uno real (base) y un entero positivo 
// (exponente), saque por pantalla el resultado de la potencia. No se puede utilizar el 
// operador de potencia.

$base = 1;
$exponente = 3;

$resultado = $base;

for ($i = 0; $i < $exponente; $i++) {
    $resultado *= $base;
}

echo $resultado;

?>