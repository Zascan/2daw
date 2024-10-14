<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // Reescribe el ejercicio anterior haciendo uso sólo de while.

        $total = 1;
        $contador = 0;

        while ($contador < $_GET["exponente"]) {
            $total *= $_GET["base"];
            $contador++;
        }

        echo "$total";

    ?>

</body>
</html>