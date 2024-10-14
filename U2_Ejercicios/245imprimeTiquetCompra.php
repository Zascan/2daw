<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Producto</td>
                <td>Precio</td>
            </tr>
        </thead>

        <tbody>
            <?php
                for ($i = 0; true; $i++) {
                    if (!isset($_GET["producto$i"])) {
                        break;
                    }

                    echo "<tr>";
                        echo "<td>" . $_GET["producto$i"] . "</td>";
                        echo "<td>" . $_GET["precio$i"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>