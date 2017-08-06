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
				function soma () {
					$p = func_get_args();
					$t = func_num_args();
					$s = 0;
					for ($i = 0; $i < $t; $i++){
						$s += $p[$i];
					}
					return $s;
				}

				$r = soma(3,5,2,4,6,7,9);
				echo "A soma dos valores é $r";
			?>
		</div>
	</body>
</html>