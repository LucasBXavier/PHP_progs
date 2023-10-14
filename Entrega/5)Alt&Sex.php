<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style3.css">
    <title>??</title>
</head>
<body>

<h1>Altura e Sexo</h1>

<form method="post">
<div class="container">
    <div class="item">
        <span>Digite sua altura  (M) e o Sexo:</span><br/>
        <input class="caixa" type="number" name="cxnum1"><br/>
        <select name="cxopt1">
        <option value="">--</option>
		<option value="M">Mulher</option>
		<option value="H">Homem</option>
        </select>
    </div>
    <div class="item">
        <span>Digite sua altura  (M) e o Sexo:</span><br/>
        <input class="caixa" type="number" name="cxnum2"><br/>
        <select name="cxopt2">
        <option value="">--</option>
		<option value="M">Mulher</option>
		<option value="H">Homem</option>
        </select>
    </div>
    <div class="item">
        <span>Digite sua altura  (M) e o Sexo:</span><br/>
        <input class="caixa" type="number" name="cxnum3"><br/>
        <select name="cxopt3">
        <option value="">--</option>
		<option value="M">Mulher</option>
		<option value="H">Homem</option>
        </select>
    </div>
    <div class="item">
        <span>Digite sua altura  (M) e o Sexo:</span><br/>
        <input class="caixa" type="number" name="cxnum4"><br/>
        <select name="cxopt4">
        <option value="">--</option>
		<option value="M">Mulher</option>
		<option value="H">Homem</option>
        </select>
    </div>

    <div class="item">
        <span>Digite sua altura (M) e o Sexo:</span><br/>
        <input class="caixa" type="number" name="cxnum5"><br/>
        <select name="cxopt5">
        <option value="">--</option>
		<option value="M">Mulher</option>
		<option value="H">Homem</option>
        </select>
    </div>
    <input class="button2" type="submit" value="Enviar">
</div>
</form>


<?php 
    
       $altura1 = $_POST["cxnum1"];
       $altura2 = $_POST["cxnum2"];
       $altura3 = $_POST["cxnum3"];
       $altura4 = $_POST["cxnum4"];
       $altura5 = $_POST["cxnum5"];

    $sexos = [
        $_POST["cxopt1"],
        $_POST["cxopt2"],
        $_POST["cxopt3"],
        $_POST["cxopt4"],
        $_POST["cxopt5"]
    ];

    $sexoM = 0;
    $sexoH = 0;

    foreach ($sexos as $sexo) {
        if ($sexo == "M") {
            $sexoM++;
        } else {
            $sexoH++;
        }
    }

    $maiorAltura = max($altura1, $altura2, $altura3, $altura4, $altura5);
    $maiorAltura = $maiorAltura / 100;
    $sexo_maior_altura = $sexo === "M" ? "Masculino" : "Feminino";

?>
<br/>
    <p style="text-align: center;"><?php echo "A maior altura é: " . number_format($maiorAltura, 2 ,'.', '') . " m" ?></p>
    <p style="text-align: center;"><?php echo "pessoas do sexo feminino: " . $sexoM ?></p>
    <p style="text-align: center;"><?php echo "pessoas do sexo masculino: " . $sexoH ?></p>
    <p style="text-align: center;"><?php echo "O sexo com a maior altura: " . $sexo_maior_altura ?></p>

    
</body>
</html>