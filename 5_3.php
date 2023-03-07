<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
  </head>
  <body>
    <h1>Verificar se um número é primo</h1>
    <form method="GET" action="">
      <label>Digite um número inteiro:</label>
      <input type="number" name="num" value="<?php echo isset($_GET['num']) ? $_GET['num'] : ''; ?>" required>
      <br><br>
      <input type="submit" value="Verificar">
    </form>
    <?php
      if(isset($_GET['num'])) {
        $num = $_GET['num'];
        $primo = true;

        if($num <= 1) {
          echo "<p>O número $num não é primo.</p>";
        }
        else {
          for($i = 2; $i <= sqrt($num); $i++) {
            if($num % $i == 0) {
              $primo = false;
              break;
            }
          }

          if($primo) {
            echo "<p>O número $num é primo.</p>";
          }
          else {
            echo "<p>O número $num não é primo.</p>";
          }
        }
      }
    ?>
  </body>
</html>
