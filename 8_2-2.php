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
    <?php
        $media = ($nota1 + $nota2) / 2;
        if($media <= 4) {
            echo "Nota: E";
        }
        elseif($media <= 6) {
            echo "Nota: D";
        }
        elseif ($media <= 7.5) {
            echo "Nota: C";
        }
        elseif ($media <= 9) {
            echo "Nota: B";
        }
        elseif ($media <= 10) {
            echo "Nota: A";
        }
    ?>
</body>
</html>