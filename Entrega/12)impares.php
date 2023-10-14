<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros impares</title>
</head>
<body>
    <h1 style="text-align: center;">Números Ímpares</h1>

    <?php 
        $count = 0;
        for ($i = 1; $count < 25; $i++) {
            if ($i % 2 != 0) { // Verifica se o número é ímpar
                echo $i . " ";
                $count++;
            }
        }
    ?>
</body>
</html>