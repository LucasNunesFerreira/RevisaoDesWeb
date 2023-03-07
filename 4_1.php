<!DOCTYPE html>
<html lang="en">
    <?php
        $raio = isset($_GET['raio']) ? $_GET['raio'] : null; 
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Digite o raio do circulo <input type="number" id="raio" name="raio" value="<?php echo $raio;?>">
        <input type="submit" value="enviar">
    </form>
    <?php
        $a = 3.14 *  ($raio * $raio);
        echo "A área é de $a";
    ?>
</body>
</html>