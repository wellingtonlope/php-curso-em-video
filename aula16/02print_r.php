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
				$v[0] = 4;
				$v[1] = 8;
				$v[2] = 3;
				print_r($v);
				echo "<br/>";
				$v2 = array(3,7,6,2,1,9);
				var_dump($v2);
				echo "<br/>";
				var_export($v2);
			?>
		</div>
	</body>
</html>