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

        do {
            if ($_GET["exponente"] <= 0 && $_GET["base"] === 0) {
                $total = "No se puede, imbécil";
            }
            else if ($_GET["exponente"] < 0) {
                $total  = (1/($_GET["base"]**($_GET["exponente"] * -1)));
            }
            else {
            $total *= $_GET["base"];
            }
            $contador++;
        }
        while ($contador < $_GET["exponente"]);

        echo "$total";

    ?>

</body>
</html>