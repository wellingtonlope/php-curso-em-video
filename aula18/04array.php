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
				$v = array( 3 => 5,
					1 => 9,
					0 => 8,
					7 => 7);
				unset($v[0]);
				print_r($v);
			?>
		</div>
	</body>
</html>