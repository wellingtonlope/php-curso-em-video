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
				$t = "Aqui temos um texto gigante criado pelo php e vai mostrar o funcionamento da funcao wordwrap";
				$r = wordwrap($t, 20, "<br/>\n", true); //false == quebra por palavra/ true == força o quebramento
				echo $r;
			?>
		</div>
	</body>
</html>