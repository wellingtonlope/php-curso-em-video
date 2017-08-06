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
				$frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
				$cont = substr_count($frase, "PHP");
				print "PHP encontrado $cont vezes";
			?>
		</div>
	</body>
</html>