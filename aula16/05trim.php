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
				$nome = "    José da Silva   ";
				echo strlen($nome);
				echo "<br/>";
				$novo = trim($nome);
				echo $novo;
				echo "<br/>";
				echo strlen($novo);
			?>
		</div>
	</body>
</html>