<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<?php
				$valor = $_GET["v"];
				$rq = sqrt($valor);
				echo "A raiz de $valor é igual a " . number_format($rq, 2);
			?>
			<a href="01exercicio.html">Voltar</a>
		</div>
	</body>
</html>