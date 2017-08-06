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
				$n = isset($_GET["numero"]) ? $_GET["numero"] : 1;
				$total = 0;
				echo "<h2>Analisando o número $n</h2>";
				echo "<h3>Valores múltiplos: ";
				for ($i = 1; $i <= $n; $i++){
					if (($n % $i) == 0) {
						echo "$i ";
						$total++;
					}
				}
				echo "</h3>";
				echo "<h3>Total de múltiplos: $total</h3>";
				echo "<h3> Resultado: $n <span class='foco'>". ($total == 2 ? "É PRIMO!" : "NÃO É PRIMO!") ."</span></h3>"
			?>
			<a href="03index.html">Voltar</a>
		</div>
	</body>
</html>