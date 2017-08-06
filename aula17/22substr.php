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
				$site = "Curso em Video";
				$sub = substr($site, 0, 5);
				print $sub . "<br/>";
				$sub2 = substr($site, 6);
				print $sub2 . "<br/>";
				$sub3 = substr($site, -5);
				print $sub3;
			?>
		</div>
	</body>
</html>