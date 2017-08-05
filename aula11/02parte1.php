<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilo.css">
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<form method="get" action="02parte2.php">
				<?php
					$c = 1;
					while ($c <= 5) {
						echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
						$c++;
					}
				?>
				<input type="submit" value="Enviar" class="botao"/>
			</form>
		</div>
	</body>
</html>