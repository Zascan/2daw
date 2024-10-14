<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // A partir del anterior, refactorizar para que funcione con inicio y fin.

        $sumaTotal = 0;

        for ($i = $_GET["num1"]; $i <= $_GET["num2"]; $i++) {
            $sumaTotal += $i;
        }

        echo "$sumaTotal";

    ?>

</body>
</html>