<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
            <label for="genero">Digite seu gênero:</label>
            <input type="text" id="genero" name="genero" required>
            <button type="submit">Verificar</button>
            <?php
                if(isset($_GET['genero'])) {
                    $genero = $_GET['genero'];
                    if($genero == 'F' || $genero == 'f') {
                        echo '<input type="text" value="F - Feminino" readonly>';
                    } elseif($genero == 'M' || $genero == 'm') {
                        echo '<input type="text" value="M - Masculino" readonly>';
                    } else {
                        echo '<input type="text" value="Gênero inválido" readonly>';
                    }
                }
            ?>
        </form>
    
</body>
</html>
