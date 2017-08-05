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
				$n = isset($_GET["num"]) ? $_GET["num"] : 0;
				$o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
				switch ($o) {
					case 1:
						$r = $n * 2;
						break;
					case 2:
						$r = pow($n, 3);
						break;
					case 3:
						$r = sqrt($n);
				}
				echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
			?>
			<br/>
			<a href="01exercicio.html" class="botao">Voltar</a>
		</div>
	</body>
</html>
