<!DOCTYPE html>
<html lang="en">
    <?php
        $quad = isset($_POST['quad']) ? $_POST['quad'] : ""; 
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 atv 5</title>
</head>
<body>
    <?php
        echo "Valor do Lado do Quadrado: $quad<br>";
        $area = $quad * $quad;
        echo "Valor da Área do Quadrado: $area";
    ?>
</body>
</html>