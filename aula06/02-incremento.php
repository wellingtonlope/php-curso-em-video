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
				/*Exercicio*/
				$atual = $_GET["aa"];#pega variavel da url
				echo "O ano atual é $atual e o ano anterior é " . --$atual; //pre decremento
			?>
		</div>
	</body>
</html>