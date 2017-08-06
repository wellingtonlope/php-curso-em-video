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
				$nome = "Wellington";
				$novo = str_pad($nome, 30, " ", STR_PAD_LEFT);
				print "Meu professor $novo é lindo!";
			?>
		</div>
	</body>
</html>