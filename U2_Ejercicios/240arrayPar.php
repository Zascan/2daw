<?php
    declare(strict_types=1);

    function esPar(int $num): bool {
        return $num % 2 === 0;
    }

    function arrayAleatorio(int $tam, int $min = 0, int $max = 100): array {
        // Validaciones
        if ($tam < 0) {
            throw new Exception('¡El tamaño del array no puede ser negativo! Tu variable: ' . $tam);
        }

        $array = [];

        for ($i = 0; $i < $tam; $i++) {
            $array[$i] = rand($min, $max);
        }

        return $array;
    }

    function arrayPares(array &$array): int {
        $numPares = 0;
        
        foreach($array as $num) {
            if (esPar(num: $num)) $numPares++;
        }

        return $numPares;
    }

    $miArray = [1,2,3,4,5,6];

    //arrayAleatorio(-1,4,10); Tira un error.
    
    echo arrayPares($miArray);
    
?>