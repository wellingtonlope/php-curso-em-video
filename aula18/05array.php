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
				$v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
				$v["fuma"] = true;
				foreach ($v as $k => $c) {
					print "O campo $k possui o conteudo $c<br/>";
				}
			?>
		</div>
	</body>
</html>