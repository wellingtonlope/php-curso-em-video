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
				$nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
				$nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
				$media = ($nota1 + $nota2) / 2;
				echo "A média entre " . number_format($nota1, 1) . " e " . number_format($nota2, 1) . " é igual a " . number_format($media, 1) . "<br/>";

				if ($media < 5) {
					$situacao = "REPROVADO";
				} elseif ($media >= 7) {
					$situacao = "APROVADO";
				} else {
					$situacao = "RECUPERAÇÃO";
				}
				echo "Situação do aluno: $situacao";
			?>
		</div>
	</body>
</html>