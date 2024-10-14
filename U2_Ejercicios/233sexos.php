<?php
$SEXOS = ["M", "F"];
$numSexos = ["M" => 0, "F" => 0];
$array = [];

    for ($i = 0; $i < 100; $i++) {
        $array[$i] = $SEXOS[rand(0,1)];
    }

    for ($i = 0; $i < count($array); $i++) {
        $array[$i] === "F" ? $numSexos["F"]++ : $numSexos["M"]++;
    }

    echo "Mujeres: " . $numSexos["F"];
    echo " Hombres: " . $numSexos["M"];

?>