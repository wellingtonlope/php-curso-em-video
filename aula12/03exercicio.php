<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<?php
				$numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
				echo "<h1>Mostrando a tabuada de $numero</h1>";
				$c = 1;
				do {
					echo "<p>$numero x $c = " . ($numero * $c) . "</p>";
					$c++;
				} while ($c <= 10);
			?>
		</div>
	</body>
</html>