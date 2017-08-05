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
				while ($c >= 0) {
					echo $c . "<br/>";
					$c -= 2;
				}
			?>
		</div>
	</body>
</html>