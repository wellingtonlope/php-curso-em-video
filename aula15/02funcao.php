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
				require "funcoes.php";//programa para se não achar
				include "funcoes.php";//programa continuar se achar
				include_once "funcoes.php";//o once carrega só uma vez
				echo "<h1>Testeando novas funções</h1>";
				ola();
				mostraValor(4);
				echo "<h2>Finalizando Programa...</h2>";
			?>
		</div>
	</body>
</html>