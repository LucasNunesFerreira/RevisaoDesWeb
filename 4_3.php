<!DOCTYPE html>
<html lang="en">
    <?php
    $num = isset($_GET['num']) ? $_GET['num'] : ""; 
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Número <input type="number" name="num" id="num">
        <input type="submit" value="enviar">
    </form>
</body>
<?php
    $fatorial = 1;
    for($i = 1; $i <= $num; $i++){
        $fatorial = $fatorial * $i; 
        
    }
    echo "Fatorial: $fatorial";
?>
</html>