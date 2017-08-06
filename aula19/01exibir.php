<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<pre>
				<?php
					$v = array("A,", "J", "M", "X", "k");
					$tot = count($v);
					print "<br/>O vetor tem $tot elementos<br/>";
					print_r($v);
					var_dump($v);
				?>
			</pre>
		</div>
	</body>
</html>