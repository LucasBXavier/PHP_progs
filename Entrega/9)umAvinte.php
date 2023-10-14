<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 a 20</title>
</head>
<body>

        <?php 
            $num = 0;
            for($i = 1; $i <= 20; $i++ ){ //um ao lado do outro
                echo $i;
            }
            echo "<br/>";
            for($i = 1; $i <= 20; $i++ ){ //um em baixo do outro
                echo $i . "<br/>";
            }
        ?>    

</body>
</html>