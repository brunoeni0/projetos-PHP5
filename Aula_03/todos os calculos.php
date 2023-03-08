<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Aula 03</title>
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$n1 = isset($_GET["a"])?$_GET["a"]: 3;
			$n2 = isset($_GET["b"])?$_GET["b"]: 2;
			echo "<h2>Valores recebidos: $n1 e $n2</h2>";
			echo "A soma de $n1 + $n2 = ". ($n1 + $n2);
			echo "<br>A subtração de $n1 - $n2 = ". ($n1 - $n2);
			echo "<br>A multiplicação de $n1 * $n2 = ". ($n1 * $n2);
			echo "<br>A divisão de $n1 / $n2 = ". ($n1 / $n2);
			echo "<br>O modulo de $n2 % $n2 = ". ($n1 % $n2);
			echo "<br>A média vale ". ($n1+$n2) / 2;
			
		?>
	</div>
</body>
</html>