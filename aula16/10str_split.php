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
				$nome = "Maria";
				$vetor = str_split($nome);
				print_r($vetor);
			?>
		</div>
	</body>
</html>