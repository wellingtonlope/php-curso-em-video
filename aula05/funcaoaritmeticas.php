<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Funções Aritimeticas em PHP</title>
		<style>
			h2 {
				font: 15pt Arial;
				color: #171559;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div>
			<?php
				$v1 = $_GET["x"];
				$v2 = $_GET["y"];
				echo "<h2>Valores recebidos: $v1 e $v2</h2>";
				echo "O valor absoluto de $v2 é ". abs($v2);
				echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
				echo "<br/>A raiz de $v1 é ". sqrt($v1);
				echo "<br/>O valor de $v2 arredondado é ". round($v2); //ceil sempre arredonda para cima ou floor sempre arredonda para baixo
				echo "<br/>A parte interira de $v2 é ". intval($v2);
				echo "<br/>O valor de $v2 em moeda é R$". number_format($v2, 2, ",",".");
			?>
		</div>
	</body>
</html>