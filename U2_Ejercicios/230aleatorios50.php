<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $misNumeros = [];

        for ($i = 0; $i < 50; $i++) {
            $misNumeros[$i] = rand(0, 99);
        }
    ?>

    <ul>
        <?php
            foreach ($misNumeros as $num) {
                echo "<li>$num</li>";
            }
        ?>
    </ul>
</body>
</html>