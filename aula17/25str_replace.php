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
				$frase = "Gosto de estudar Matemática! Matemática é muito legal!";
				$novafrase = str_replace("Matemática", "PHP", $frase);
				print $novafrase;
			?>
		</div>
	</body>
</html>