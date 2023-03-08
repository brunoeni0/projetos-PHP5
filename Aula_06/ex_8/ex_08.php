<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Exercício 08</title>
		<link rel="stylesheet" href="../../_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php 
				$valor = $_GET["v"];
				echo "A raiz de $valor é igual a ", number_format(sqrt($valor), 2);
			?>
			<a href="ex_08.html">Voltar</a>
		</div>
	</body>
</html>
