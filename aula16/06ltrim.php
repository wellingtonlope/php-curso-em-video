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
				$nome = "   José da Silva   ";
				print strlen($nome);
				print "<br/>";
				$novo = ltrim($nome);
				print $novo;
				print "<br/>";
				print strlen($novo);
			?>
		</div>
	</body>
</html>