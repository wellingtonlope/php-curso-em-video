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
				$m = array(array(6,4), array(4,9), array(3,2));
				$m[0][1] = $m[2][0];
				print_r($m);
			?>
		</div>
	</body>
</html>