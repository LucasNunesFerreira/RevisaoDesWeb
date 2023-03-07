<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv4</title>
</head>
<body>
<?php
        $letra = isset($_GET['letra']) ? $_GET['letra'] : "";
        echo $letra;
        if(strtolower($letra) == "a" || strtolower($letra) == "e" || strtolower($letra) == "i" || strtolower($letra) == "o" || strtolower($letra) == "u"){
            echo " - Vogal";
        } else{
            echo " - Não vogal";
        }

    ?>
    <form action="../atv4.php" method="get">
        <input type="submit" value="VOLTAR">
    </form>
</body>
</html>