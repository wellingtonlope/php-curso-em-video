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
				$vetor[0] = "Curso";
				$vetor[1] = "em";
				$vetor[2] = "Vídeo";
				$texto = implode(" ", $vetor);// igual join()
				print $texto;
			?>
		</div>
	</body>
</html>