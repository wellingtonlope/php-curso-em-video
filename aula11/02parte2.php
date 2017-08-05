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
				$c = 1;
				while ($c <= 5) {
					echo "Valor $c: " . (isset($_GET["v$c"]) ? $_GET["v$c"] : 0) . "<br/>";
					$c++;
				}
			?>
		</div>
	</body>
</html>