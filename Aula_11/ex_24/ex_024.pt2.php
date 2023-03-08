<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 24</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$n1 = isset($_GET["n"])? $_GET["n"]: 0;
			for ($c = 1; $c <= 10; $c++) {
				echo "$n1 x $c = ". $n1*$c. "<br/>";
			}
		?>
		<br/>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>
