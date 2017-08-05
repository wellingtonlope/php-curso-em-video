<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<form method="get" action="03exercicio.php">
				Número:
				<select name="numero" id="numero">
					<?php
						$c = 1;
						do {
							echo "<option value='$c'>$c</option>";
							$c++;
						} while ($c <= 10);
					?>
				</select>
				<input type="submit" value="Calcular"/>
			</form>
		</div>
	</body>
</html>