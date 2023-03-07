<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
		if (isset($_POST['num1']) && isset($_POST['num2'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$soma = $num1 + $num2;
			echo " O número 1 é $num1 e o número 2 é $num2 <br> O resultado é $soma";
		} 
	?>
</body>
</html>