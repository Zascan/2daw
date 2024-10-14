<?php
$totalMin = 1000;

$horas = $totalMin / 60;
$min = $totalMin % 60;

echo 'Horas: ' . intval($horas);
echo '  Minutos: ' . $min;
?>