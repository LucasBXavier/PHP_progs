<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+18</title>
</head>
<body>
    <h1>+18</h1>

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
       $idades = [
        $_POST["cxnum1"],
        $_POST["cxnum2"],
        $_POST["cxnum3"],
        $_POST["cxnum4"],
        $_POST["cxnum5"]
    ];

        $maiores_de_idade = 0;
        $menores_de_idade = 0;

        foreach ($idades as $idade) {
            if ($idade >= 18) {
                $maiores_de_idade++;
            } else {
                $menores_de_idade++;
            }
        }

        echo "<br/><p>Total de pessoas maiores de idade: $maiores_de_idade</p>";
        echo "<p>Total de pessoas menores de idade: $menores_de_idade</p><br>";
       
    ?>
    
</body>
</html>