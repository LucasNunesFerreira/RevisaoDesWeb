<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
      if(isset($_POST['val'])){

          $val = $_POST['val'];
          echo "O valor informado foi $val";
          if ($val > 0) {
              echo "<p>O valor é positivo";
            } elseif ($val < 0) {
                echo "<p>O valor é negativo";
            } else {
                echo "<p>O valor é zero";
            }
        }
            ?>
<body>
    <form method="post">
      <label for="val">Escreva um valor</label>
      <input type="number" id="val" name="val" required>
      <input type="submit" value="Enviar">
    </form>
</body>
</html>