<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    .cxnome{
        margin-top: auto;
        color: black;
        font-size: 20px;
        margin-left: 7rem;
        width: 5rem;
        padding: 1px;
        text-align: center;
        font-size: 1rem;
        border-radius: 15px;
        cursor: pointer;
    }

    .btn{
        width: 70px;
        margin-left: 7.7rem;
        margin-bottom: 10px;
        cursor: pointer;
        background: #5E5DF0;
        border-radius: 999px;
        box-shadow: #5E5DF0 0 10px 20px -10px;
        box-sizing: border-box;
        color: #FFFFFF;
    }
</style>

<form method="post">
    <div>
        <span>Digite o primeiro nome:</span>
        <input class="cxnome" type="text" name="cxnome1"><br/>
        <span>Digite o segundo nome:</span>
        <input class="cxnome" type="text" name="cxnome2"><br/>
        <span>Digite o terceiro nome:</span>
        <input class="cxnome" type="text" name="cxnome3"><br/>
        <span>Digite o quarto nome:</span>
        <input class="cxnome" type="text" name="cxnome4"><br/>
        <span>Digite o quinto nome:</span>
        <input class="cxnome" type="text" name="cxnome5"><br/>
        <input class="btn" type="submit" value="Inverter">
    </div>

    <?php
       $nomes = [
        $_POST['cxnome1'],
        $_POST['cxnome2'],
        $_POST['cxnome3'],
        $_POST['cxnome4'],
        $_POST['cxnome5']
       ];
       
       echo "<br/><p style='text-align: center;'>Nomes invertidos: </p><br/>";
       $reverse_nomes = array_reverse($nomes);
       foreach ($reverse_nomes as $nome) {
           echo "<p style='text-align: center;'>$nome</p> <br/>";
       }
    ?>
</body>
</html>