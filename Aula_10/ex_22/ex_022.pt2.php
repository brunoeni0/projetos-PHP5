<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 22</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$n1 = isset($_GET["n"])? $_GET["n"]: 0;
			$c = 1;
			echo "<h3>A tabuada de $n1 é:</h3>";
			do {				
				echo "$n1 x ". $c. " = ". $n1*$c++. "<br/>";
			} while ($c <= 10);
		?>
		<br/>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>
