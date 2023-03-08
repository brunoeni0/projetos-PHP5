<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Aula 03</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$n1 = 18;
			$n2 = 7;
			$tot = $n1 % $n2;
			echo ("O modulo de $n1 % $n2 = $tot");
			echo ('<br>O modulo de $n1 % $n2 = '. ($n1 % $n2));
			echo "<br>O modulo de $n2 % $n1 = ". $n2 % $n1;
		?>
	</div>
</body>
</html>
