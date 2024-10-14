<?php
    function mayor(): int {
        $numMayor = func_get_arg(0); // Empieza en el primer elemento

        for ($i = 1; $i < func_num_args(); $i++) {
            $numActual = func_get_arg($i);

            if ($numMayor < $numActual) $numMayor = $numActual; 
        }

        return $numMayor;
    }

    function concatenar(...$palabras): string {
        $concatenacion = "";

        foreach($palabras as $palabra) {
            $concatenacion = $concatenacion . " " . $palabra;
        }

        return $concatenacion;
    }

    echo concatenar("hola", "qué", "tal", "estás", "?");
    echo mayor(34, 23, 435, 23, 43, 88978, 9890, 7889, 9090, 90809);
?>