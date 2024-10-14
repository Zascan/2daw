<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // Escribe un programa que sume los números del 1 al 10.

        $sumaTotal = 0;

        for ($i = 0; $i <= 10; $i++) {
            $sumaTotal += $i;
        }

        echo "$sumaTotal";

    ?>

</body>
</html>