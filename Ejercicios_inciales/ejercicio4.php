<?php
// Diseñar un algoritmo que nos diga el dinero que tenemos (en euros y céntimos) después 
// de pedirnos cuantas monedas tenemos (de 2€, 1€, 50 céntimos, 20 céntimos o 10 
// céntimos).

$eur2 = 40;
$eur1 = 10;
$cent50 = 90;
$cent20 = 2;
$cent10 = 10;

$centTotales = ($cent50 * 50) + ($cent20 * 20) + ($cent10 * 10);

$dineroTotal = ($eur2 * 2) + $eur1 + ($centTotales / 100);

echo $dineroTotal;

?>