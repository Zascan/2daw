<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            // A partir del anterior, refactorizar para que funcione con inicio y fin.

            for ($i = $_GET["num1"]; $i <= $_GET["num2"]; $i+=2) {
                if ($i % 2 !== 0) {
                    $i++;
                }

                echo "<li>$i</li>";

            }
        ?>
    </ul>    
    

</body>
</html>