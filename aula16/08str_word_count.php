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
				$frase = "Eu vou estudar PHP";
				$cont = str_word_count($frase, 0); //1 cria vetor com a frase/ 2 cria vetor mantendo o posicionamento das palavras
				print $cont;
			?>
		</div>
	</body>
</html>