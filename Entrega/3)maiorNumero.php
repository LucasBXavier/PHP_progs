<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style2.css">
    <title>Encontre o maior numero</title>
</head>
<body>
    <h1>Encontre o maior numero</h1>
    
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

    <?php 
         $num1 = $_POST["cxnum1"];
         $num2 = $_POST["cxnum2"];
         $num3 = $_POST["cxnum3"];
         $num4 = $_POST["cxnum4"];
         $num5 = $_POST["cxnum5"];

         $maiorNumero = max($num1, $num2, $num3, $num4, $num5);
    ?>
    </form>
        <br/>
        <p style="text-align: center;"><?php echo "O maior numero é: " . $maiorNumero ?></p>
</body>
</html>