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
				$valor = isset($_GET["val"]) ? $_GET["val"] : 1;
				echo "<h1>Calculando o fatorial de $valor</h1>";
				$c = $valor;
				$fat = 1;
				do {
					$fat *= $c;
					$c--;
				} while ($c >= 1);
				echo "<h2>$valor! = $fat";
			?>
			<p><a href="02index.html" class="botao">Voltar</a></p>
		</div>
	</body>
</html>