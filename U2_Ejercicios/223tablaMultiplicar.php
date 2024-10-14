<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tbody>

            <?php
                $num1 = $_GET['num1'];
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $num1 * $i;
                    echo "<tr><td>$num1 * $i = $resultado</td></tr>";
                }
            ?>

        </tbody>
    </table>


</body>
</html>