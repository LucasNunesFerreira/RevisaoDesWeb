<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv8</title>
</head>
<body>
    <?php
        $prog = isset($_GET['prog']) ? $_GET['prog'] : "";
        $a1 = isset($_GET['a1']) ? $_GET['a1'] : "";
        $r = isset($_GET['r']) ? $_GET['r'] : "";
        $q = isset($_GET['q']) ? $_GET['q'] : "";

        if($prog == "PA"){
            $a = $a1;
            for($i=1;$i<=$q;$i++){
                echo "$i) $a <br>";
                $a = $a + $r;
            }
        }
        if($prog == "PG"){
            $a = $a1;
            for($i=1;$i<=$q;$i++){
                echo "$i) $a <br>";
                $a = $a * $r;
            }
        }
    ?>
    <form action="../atv8.php" method="get">
        <input type="submit" value="VOLTAR">
    </form>
</body>
</html>