<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
              for ($fila = 0; $fila < 10; $fila++) {
                echo "<tr>";
                    for ($columna = 0; $columna < 10; $columna++) {
                        echo "<td>($fila,$columna)</td>";
                    }
                echo "</tr>";
              }  
            ?>
        </tbody>
    </table>
</body>
</html>