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
				$n = isset($_GET["num"]) ? $_GET["num"] : 1;
				for ($i = 1; $i <= 10; $i++) {
					$r = $n * $i;
					echo "$n x $i = $r<br/>";
				}
			?>
			<br/>
			<a href="02index.php">Voltar</a>
		</div>
	</body>
</html>