<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style2.css">
    <title>--</title>
</head>
<body>
    <h1>Hello World</h1>

    <div class="container">
        <form method="post">
            <div class="item">
                <span>Digite um número inteiro</span><br/>
                <input type="number" name="cxnum1" class="caixa">
                <span>Digite outro número inteiro</span><br/>
                <input type="number" name="cxnum2" class="caixa"><br/>
                <input type="submit" value="Gerar" class="button2">
            </div> 
        </form>
    </div>

    <?php 
        $num1 = $_POST["cxnum1"];
        $num2 = $_POST["cxnum2"];

        $inicio = min($num1, $num2);
        $fim = max($num1, $num2);
        $soma = 0;

        for($i = $inicio; $i < $fim; $i++){
            echo "$i ";
            $soma += $i;
        }

        echo "<br/> A soma total dos numeros é de: $soma ";


    ?>
    
</body>
</html>