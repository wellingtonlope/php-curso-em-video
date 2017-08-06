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
					$s = $a + $b;
					echo "<p>A soma vale $s</p>";
				}

				soma(1,3);
				soma(8,2);
				$x = 9;
				$y = 15;
				soma($x,$y);
			?>
		</div>
	</body>
</html>