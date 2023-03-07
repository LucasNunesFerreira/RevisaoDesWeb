<!DOCTYPE html>
<html lang="en">
    <?php
        $quad = isset($_POST['quad']) ? $_POST['quad'] : ""; 
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>1 atv 5</title>
</head>
<body>
    <form action="5_1-2.php" method="post">
        <label for="quad">Valor do Lado do Quadrado:</label>
        <input type="text" name="quad" id="quad">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>