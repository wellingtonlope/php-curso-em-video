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
				$ano = isset($_GET["ano"]) ? $_GET["ano"] : date("Y");
				$idade = date("Y") - $ano;
				echo "Você nasceu em $ano e tem $idade anos<br/>";
				if ($idade < 16) {
					$tipoVoto = "não vota";
				} elseif (($idade >= 16 and $idade < 18) or ($idade > 65)) {
					$tipoVoto = "voto opcional";
				} else {
					$tipoVoto = "voto obrigatorio";
				}
				echo "Para essa idade, $tipoVoto";
			?>
		</div>
	</body>
</html>