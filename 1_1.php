<!DOCTYPE html>
<html>
<head>
	<title>Formulário GET</title>
</head>
<body>
	<form method="GET">
		<label for="numero">Digite um número:</label>
		<input type="number" name="numero" id="numero" value="<?php echo $_GET['numero'] ?? ''; ?>">
		<button type="submit">Enviar</button>
	</form>
	<?php
		if (isset($_GET['numero'])) {
			$numero = $_GET['numero'];
			echo "<p>O número informado foi $numero</p>";
		}
	?>
</body>
</html>
