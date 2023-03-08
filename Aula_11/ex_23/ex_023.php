<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 23</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			for ($c = 0; $c <= 10; $c++) {
				echo "$c ";
			}
			echo "<br/>";
			for ($c = 10; $c >= 0; $c--) {
				echo "$c ";
			}
			echo "<br/>";
			for ($c = 0; $c <= 50; $c += 5) {
				echo "$c ";
			}
			echo "<br/>";
			for ($c = 20; $c >= 0; $c -= 2){
				echo "$c ";
			}
		?>
	</div>
</body>
</html>
