<?php
    $frase = "Esta es mi frase.";
    $nueva ="";
    for ($i = 0; $i < strlen($frase); $i += 2) {
        $nueva = $nueva . $frase[$i];
    }

    printf(str_replace(" ","",$nueva));

?>