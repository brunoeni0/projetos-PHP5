<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 27</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			function soma($a, $b) {
				return $a + $b;
			}
			$x = 3;
			$y = 7;
			$r = soma($x, $y);
			echo "A soma entre $x e $y é igual a $r.";
		?>
	</div>
</body>
</html>
