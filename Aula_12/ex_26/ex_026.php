<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 26</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			function soma ($a, $b) {
				$s = $a + $b;
				echo "A soma de $a + $b = $s <br/>";
			}
			soma(8, 2);
			soma(4, 3);
			
			$x = 9;
			$y = 15;
			soma($x, $y);
		?>
	</div>
</body>
</html>
