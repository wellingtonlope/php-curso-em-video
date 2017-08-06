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
				$site = "Curso em Vídeo";
				$vetor = explode(" ", $site);//quebra no delimiter e forma um vetor
				print_r($vetor);
			?>
		</div>
	</body>
</html>