<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // A partir de una base y exponente, mediante la acumulación de 
        // productos, calcula la potencia utilizando la instrucción for.

        $total = 1;

        for ($i = 0; $i < $_GET["exponente"]; $i++) {
            $total *= $_GET["base"];
        }

        echo "$total";

    ?>

</body>
</html>