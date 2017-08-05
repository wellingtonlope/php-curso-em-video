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
				$inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
				$final = isset($_GET["final"]) ? $_GET["final"] : 0;
				$incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;
				$crescente = $inicio < $final ? true : false;

				if ($crescente) {
					while ($inicio <= $final) {
						echo "$inicio ";
						$inicio += $incremento;
					}
				} else {
					while ($inicio >= $final) {
						echo "$inicio ";
						$inicio -= $incremento;
					}
				}
			?>
			<br/>
			<a href="03exercicio.html">Votlar</a>
		</div>
	</body>
</html>