<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Calculo de media</title>
</head>
<body>
    <h1>Calcule sua média</h1>

    <form method="post">
        <div class="container">
            <span>Digite a sua primeira nota:</span>
            <input class="cxnum" type="number" name="cxnota1"><br/>
            <span>Digite a segunda nota:</span>
            <input class="cxnum" type="number" name="cxnota2"><br/>
            <input class="button" type="submit" value="Calcular">
        </div>
    </form>

    <?php 
        $num1 = $_POST["cxnota1"];
        $num2 = $_POST["cxnota2"];

        $media = $num1 + $num2 / 2;
    ?>

    <p><?php echo "A sua media é de: " . $media ?></p>

    <?php 
        if($media < 6){
            echo "<span style='color:#FF6347'>Você está a baixo da média!</span>";
        }
        elseif($media > 10){
            echo "<span style='color:#FFD700'>Uau, você está a cima da média!</span>";
        }
        else{
            echo "<span style='color:#FFD700'>Parabéns você está na média!</span>";
        }
    ?>

</body>
</html>