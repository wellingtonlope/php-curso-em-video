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
				$p = "Leite";
				$pr = 4.5;
				printf ("O %s custa R$ %.2f", $p, $pr);
				//%d decimal/ %u decimal sem sinal/ %f real/ %s string
			?>
		</div>
	</body>
</html>