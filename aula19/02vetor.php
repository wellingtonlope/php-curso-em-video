<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<pre>
				<?php
					$v = array("A", "J", "M", "X", "K");
					print_r($v);
					array_push($v, "O");//colocar no final
					print_r($v);
					array_pop($v); //exclui ultimo elemento
					print_r($v);

					array_unshift($v, "O");//cria no inicio
					print_r($v);
					array_shift($v);//exclio no inicio
					print_r($v);
				?>
			</pre>
		</div>
	</body>
</html>