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
				$ano = $_GET["an"];
				$idade = 2017 - $ano;
				echo "Quem nasceu em $ano tem idade de $idade anos <br/>";
				$tipo = ($idade>=18 and $idade<65) ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
				echo "E dessa forma o seu voto é $tipo";
			?>
		</div>
	</body>
</html>