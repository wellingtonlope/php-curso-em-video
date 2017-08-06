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
				function soma ($a, $b) {
					return $a + $b;
				}

				$x = 3;
				$y = 4;
				$r = soma($x, $y);
				echo "A soma entre $x e $y é igual a $r";
			?>
		</div>
	</body>
</html>