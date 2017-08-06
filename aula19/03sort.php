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
					$v = array("A" , "J", "B", "X", "k");
					print_r($v);
					sort($v); //crescente
					print_r($v);
					rsort($v); //decrescente
					print_r($v);
					asort($v); //mexe com os indices
					print_r($v);
					arsort($v); //mexe com os indices
					print_r($v);
					ksort($v); //colocar os indices em ordem
					print_r($v);
					krsort($v); //coloca os indeces em ordem decrescente
					print_r($v);
				?>
			</pre>
		</div>
	</body>
</html>