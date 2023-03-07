<!DOCTYPE html>
<html lang="en">
    <?php
        $nota1 = isset($_POST['nota1']) ? $_POST['nota1'] : "";
        $nota2 = isset($_POST['nota2']) ? $_POST['nota2'] : "";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 atv 8</title>
</head>
<body>
    <form action="8_2-2.php" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" id="nota1">
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" id="nota2">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>