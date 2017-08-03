<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<?php
				$a = 3;
				$b = "3";
				$r = ($a == $b) ? "SIM" : "NÃO";
				echo "As variaveis A e B são iguais? $r <br/>";
				$rr = ($a === $b) ? "SIM" : "NÃO";
				echo "As variaveis A e B são identicas? $rr";
			?>
		</div>
	</body>
</html>