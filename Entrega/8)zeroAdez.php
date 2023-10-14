<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style2.css">
    <title>0 a 10</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="item">
                <span>Digite um valor entre 0 e 10</span><br/>
                <input type="number" name="cxnum" class="caixa"><br/>
                <input type="submit" value="Testar" class="button2">
            </div>
        </form>
    </div>
<?php 
    $num = $_POST["cxnum"];

    if($num > 10){
        echo "<p style='text-align: center;'>Digite um numero valido, que seja entre 0 e 10</p>";
    }elseif($num < 0){
        echo "<p style='text-align: center;'>Digite um numero valido, que seja entre 0 e 10</p>";
    }else{
        echo "<p style='text-align: center;'>Muito bem!</p>";
    }

?>

</body>
</html>