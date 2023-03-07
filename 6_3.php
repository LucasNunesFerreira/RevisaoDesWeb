<!DOCTYPE html>
<html lang="en">
    <?php
        $caixas = isset($_GET['caixas']) ? $_GET['caixas'] : "";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 atv 6</title>
</head>
<body>
    <form action="" method="get">
        <fieldset>
            <legend>Loja Sr. Manoel Joaquim</legend>
            <label for="caixas">Quantidade de Caixas:</label>
            <input type="text" name="caixas" id="caixas" value="<?=$caixas?>">
            <br><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <?php
        $valor = 1.99;
        $j = 0;
        for ($i=0; $i < $caixas; $i++) {
            $j ++;
            $resul = $valor * $j;
            echo "$j - R$ $resul<br>";
        }
    ?>
</body>
</html>