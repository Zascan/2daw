<?php

    $frase = "Esta es mi frase.";
    $sumaletras=0;
    $sumapalabras=0;

    for($i=0;$i<strlen($frase);$i++){
        if($frase[$i]!=" " && $frase[$i]!="." ){
            $sumaletras++;
        }else{
            $sumapalabras++;
        }
    }
    echo "<p>Total de letras: ".$sumaletras."</p>";
    echo "<p>Total de palabras: ".$sumapalabras."</p>";
?>