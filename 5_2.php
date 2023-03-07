<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    

    <title>Atividade 5</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="n1" id="n1" placeholder="Digite o primeiro número" value="<?= $n1 ?>">
        <br>
        <input type="number" name="n2" id="n2" placeholder="Digite o primeiro número" value="<?= $n2 ?>">
        <br>
        <input type="number" name="n3" id="n3" placeholder="Digite o primeiro número" value="<?= $n3 ?>">
        <br>
        Ordem Crescente?<input type="radio" name="cresc" id="cresc">
        <br>
        <input type="submit" name="acao" id="acao">
    </form>
</body>
    <?php
   
    $n1 = isset($_GET['n1']) ? $_GET['n1'] : 0;
    $n2 = isset($_GET['n2']) ? $_GET['n2'] : 0;
    $n3 = isset($_GET['n3']) ? $_GET['n3'] : 0;

    $cres = isset($_GET['cresc']) ? $_GET['cresc'] : "";

    if ($cres) {
        if ($n1 > $n2 && $n2 > $n3) {
            echo $n3 . "<br> $n2 <br> $n1";
        } elseif ($n1 > $n2 && $n3 > $n2) {
            echo $n2 . "<br> $n3 <br> $n1";
        } elseif ($n2 > $n1 && $n1 > $n3) {
            echo $n3 . "<br> $n1 <br> $n2";
        } elseif ($n2 > $n1 && $n3 > $n1) {
            echo $n1 . "<br> $n3 <br> $n2";
        } elseif ($n3 > $n1 && $n1 > $n2) {
            echo $n2 . "<br> $n1 <br> $n3";
        } elseif ($n3 > $n2 && $n2 > $n1) {
            echo $n1 . "<br> $n2 <br> $n3";
        }
    } else {
        if ($n1 > $n2 && $n2 > $n3) {
            echo $n1 . "<br> $n2 <br> $n3";
        } elseif ($n1 > $n2 && $n3 > $n2) {
            echo $n1 . "<br> $n3 <br> $n2";
        } elseif ($n2 > $n1 && $n1 > $n3) {
            echo $n2 . "<br> $n1 <br> $n3";
        } elseif ($n2 > $n1 && $n3 > $n1) {
            echo $n2 . "<br> $n3 <br> $n1";
        } elseif ($n3 > $n1 && $n1 > $n2) {
            echo $n3 . "<br> $n1 <br> $n2";
        } elseif ($n3 > $n2 && $n2 > $n1) {
            echo $n3 . "<br> $n2 <br> $n1";
        }
    }
    ?>
</html>