<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style3.css">
    <title>Soma dos pares</title>
</head>
<body>
    <h1 style="margin-top: 40px;">Soma dos numeros pares</h1>

<?php 
    $soma = 0;

    for ($i = 2; $i <= 100; $i += 2) {
        $soma += $i;
    }

echo "<p style='text-align: center; margin-top: 10rem;'>A soma dos primeiros 50 números pares é: $soma</p>";
?>

    
</body>
</html>