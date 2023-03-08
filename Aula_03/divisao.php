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
			$n1 = 3;
			$n2 = 2;
			$tot = $n1 / $n2;
			echo ("A divisão de $n1 / $n2 = $tot");
			echo ('<br>A divisão de $n1 / $n2 = '. $tot);
			echo "<br>A divisão de $n1 / $n2 = ".($n1/$n2);
			echo "<br>A divisão de ", $n2, " / ", $n1, " = ", $n2 / $n1;
			echo '<br>A divisão de ', $n2, ' / ', $n1, ' = ', $n2/$n1;
		?>
	</div>
</body>
</html>
