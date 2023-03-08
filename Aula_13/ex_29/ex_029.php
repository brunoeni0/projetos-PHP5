<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 29</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			function soma1($x) {
				echo "O valor de X é ", $x += 2;
			}
			$a = 3;
			soma1($a);
			echo "<br/>O valor de A é $a";
			
			echo "<br/><br/>";
			
			function soma2 (&$y) {
				echo "O valor de Y é ", $y += 3;
			}
			$b = 5;
			soma2($b);
			echo "<br/>O valor de B é $b";
		?>
	</div>
</body>
</html>
