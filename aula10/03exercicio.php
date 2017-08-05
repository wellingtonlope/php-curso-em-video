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
				$estado = isset($_GET["estado"]) ? $_GET["estado"] : 0;
				switch ($estado) {
					case "ac":
						$regiao = "Norte";
						break;
					case "al":
						$regiao = "Nordeste";
						break;
					case "ap":
						$regiao = "Norte";
						break;
					case "am":
						$regiao = "Norte";
						break;
					case "ba":
						$regiao	= "Nordeste";
						break;
					case "ce":
						$regiao = "Nordeste";
						break;
					case "df":
						$regiao = "Centro-Oeste";
						break;
					case "es":
						$regiao = "Sudeste";
						break;
					case "go":
						$regiao = "Centro-Oeste";
						break;
					case "ma":
						$regiao = "Nordeste";
						break;
					case "mt":
						$regiao = "Centro-Oeste";
						break;
					case "ms":
						$regiao = "Centro-Oeste";
						break;
					case "mg":
						$regiao = "Sudeste";
						break;
					case "pa":
						$regiao = "Norte";
						break;
					case "pb":
						$regiao = "Nordeste";
						break;
					case "pr":
						$regiao = "Sul";
						break;
					case "pe":
						$regiao = "Nordeste";
						break;
					case "pi":
						$regiao = "Nordeste";
						break;
					case "rj":
						$regiao = "Sudeste";
						break;
					case "rn":
						$regiao = "Nordeste";
						break;
					case "rs":
						$regiao = "Sul";
						break;
					case "ro":
						$regiao = "Norte";
						break;
					case "rr":
						$regiao = "Norte";
						break;
					case "sc":
						$regiao = "Sul";
						break;
					case "sp":
						$regiao = "Suldeste";
						break;
					case "se":
						$regiao = "Nordeste";
						break;
					case "to":
						$regiao = "Norte";
						break;
					default:
						$regiao = "Invalida";
				}

				echo "Você mora na <span class='foco'>Região $regiao</span>";
			?>
			<br/>
			<a href="03exercicio.html" class="botao">Voltar</a>
		</div>
	</body>
</html>