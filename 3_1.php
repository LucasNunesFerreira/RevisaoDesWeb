<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
      <label for="nota1">Nota 1:</label>
      <input type="number" step="0.01" id="nota1" name="nota1" value="<?php echo isset($_POST['nota1']) ? $_POST['nota1'] : '' ?>" required><br>
      <label for="nota2">Nota 2:</label>
  <input type="number" step="0.01" id="nota2" name="nota2" value="<?php echo isset($_POST['nota2']) ? $_POST['nota2'] : '' ?>" required><br>

  <label for="nota3">Nota 3:</label>
  <input type="number" step="0.01" id="nota3" name="nota3" value="<?php echo isset($_POST['nota3']) ? $_POST['nota3'] : '' ?>" required><br>

  <label for="nota4">Nota 4:</label>
  <input type="number" step="0.01" id="nota4" name="nota4" value="<?php echo isset($_POST['nota4']) ? $_POST['nota4'] : '' ?>" required><br>

  <input type="submit" value="Calcular média">
</form>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    echo "<p>Sua média é: $media</p>";
  }
?>
    
</body>
</html>