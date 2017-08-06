<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<form method="get" action="02tabuada.php">
				<select name="num" id="num">
					<?php
						for ($i = 1; $i <= 10; $i++) {
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
				<input type="submit" value="Tabuada"/>
			</form>
		</div>
	</body>
</html>