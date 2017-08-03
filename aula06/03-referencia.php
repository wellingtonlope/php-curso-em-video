<!DOCTYPE html>
<htlm>
	<head>
		<link rel="stylesheet" href="css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<?php
				$a = 3;
				$b = &$a; //refencia
				$b += 5;
				echo "A variavel A vale $a";
				echo "<br/>A variavel B vale $b";
			?>
		</div>
	</body>
</htlm>