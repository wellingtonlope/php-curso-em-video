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
				$frase = "Estou aprendendo PHP";
				$pos = stripos($frase, "php");
				print "$frase<br/>A string foi encontrada na posição $pos";
			?>
		</div>
	</body>
</html>