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
      <label for="horario">Horário:</label>
      <input type="time" id="horario" name="horario"><br><br>
      <input type="submit" value="Enviar">
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $horario = $_POST["horario"];
        $mensagem = "";

        if ($horario >= "00:00" && $horario < "05:00") {
          $mensagem = "Boa Madrugada";
        } elseif ($horario >= "05:00" && $horario < "12:00") {
          $mensagem = "Bom Dia";
        } elseif ($horario >= "12:00" && $horario < "18:00") {
          $mensagem = "Boa Tarde";
        } else {
          $mensagem = "Boa Noite";
        }

        echo "<br><br><p>$mensagem!</p>";
    }
   ?>
    
</body>
</html>