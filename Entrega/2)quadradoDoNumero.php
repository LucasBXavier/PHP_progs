<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style2.css">
    <title>Quadrado dos numeros</title>
</head>
<body>

<h1>Calcule o quadrados dos numeros</h1>

<form method="post">
    <div>
        <span>Digite o primeiro numero:</span>
        <input class="caixa" type="number" name="cxnum1"><br/>
        <span>Digite o segundo numero:</span>
        <input class="caixa" type="number" name="cxnum2"><br/>
        <span>Digite o terceiro numero:</span>
        <input class="caixa" type="number" name="cxnum3"><br/>
        <span>Digite o quarto numero:</span>
        <input class="caixa" type="number" name="cxnum4"><br/>
        <span>Digite o quinto numero:</span>
        <input class="caixa" type="number" name="cxnum5"><br/>
        <input class="button2" type="submit" value="Calcular">
    </div>
</form>
    
    <?php   
        $num1 = $_POST["cxnum1"];
        $num2 = $_POST["cxnum2"];
        $num3 = $_POST["cxnum3"];
        $num4 = $_POST["cxnum4"];
        $num5 = $_POST["cxnum5"];

        $quad1 = $num1 * $num1;
        $quad2 = $num2 * $num2;
        $quad3 = $num3 * $num3;
        $quad4 = $num4 * $num4;
        $quad5 = $num5 * $num5;
    ?>
    <br>
    <h2>Resultado</h2>
    <div>
        <p style="text-align: center;"><?php echo "O quadrado de " . $num1 . " é: " . $quad1?></p>
        <p style="text-align: center;"><?php echo "O quadrado de " . $num2 . " é: " . $quad2?></p>
        <p style="text-align: center;"><?php echo "O quadrado de " . $num3 . " é: " . $quad3?></p>
        <p style="text-align: center;"><?php echo "O quadrado de " . $num4 . " é: " . $quad4?></p>
        <p style="text-align: center;"><?php echo "O quadrado de " . $num5 . " é: " . $quad5?></p>
    </div>
</body>
</html>