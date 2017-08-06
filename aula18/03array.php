<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<table border="1">
				<tr>
					<?php
						$c = range(5,20,2);
						foreach ($c as $v) {
							echo "<td>$v</td>";
						}
					?>
				</tr>
			</table>
		</div>
	</body>
</html>