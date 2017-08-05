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
				$c = 10;
				do {
					echo "$c ";
					$c--;
				} while ($c >= 1);
			?>
		</div>
	</body>
</html>