<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="245imprimeTiquetCompra.php" method="get">
        <?php
            $cantidad = 3;

            for ($i = 0; $i < $cantidad; $i++) {
                echo "<div style='display: flex'>";

                echo "<p><label for='producto$i'>Producto $i:</label></p>";
                echo "<input type='text' name='producto$i' id='producto$i'></br>";

                echo "<p><label for='precio$i'>Precio $i:</label></p>";
                echo "<input type='text' name='precio$i' id='precio$i'></br>";

                echo "</div>";
            }
        ?>

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>