<!DOCTYPE html>
<?php
    $altura = 0;
    if(isset($_POST['altura']))
    $altura = $_POST['altura'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Insira sua altura<input type="text" name="altura" id="altura" value=<?php echo isset($_POST['altura']) ? $_POST['altura'] : '' ?>>
        <br>
        <input type="submit" name="acao" id="acao">
    </form>
    <?php
    
        $pesoideal = (72.7 * $altura) - 58;
        echo "O peso ideal para sua altura é de $pesoideal";
    ?>
</body>
</html>