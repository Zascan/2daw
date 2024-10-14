<?php
    function digitos(int $num): int {
        //return strlen((string)$num);

        $numDigitos = 1;

        while ($num >= 10) {
            $num /= 10;
            $numDigitos++;
        }

        return $numDigitos;
    }

    function digitoN(int $num, int $pos): int {
        // Manera fácil
        // $numString = (string) $num;
        // return (int) $numString[$pos-1];

        $longitud = digitos($num);

        // Validación
        if ($pos > $longitud || $pos <= 0) throw new Error("La posición no existe!");

        // Cortar el número
        for ($i = 0; $i < $longitud - $pos; $i++) {
           $num /= 10;
        }

        // Devolver número
        return $num % 10;
    }

    

    function quitaPorDetras(int $num, int $cant): int {
        
        for ($i = 0; $i < $cant; $i++) {
            $num /= 10;
        }

        return $num;
    }


    function quitaPorDelante(int $num, int $cant): int {

       for($i = 0; $i < $cant; $i++) {
            $primerDigito = digitoN($num, 1);
            $num -= $primerDigito * 10**(digitos($num)-1);
       }

       return $num;
    }
    echo quitaPorDelante(1234567, 7);

?>