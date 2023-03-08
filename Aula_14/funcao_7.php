<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 7</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nome = "   José da Silva   ";
			echo strlen($nome);
			echo "<br/><br/>";
			$novo = rtrim($nome);
			echo $nome;
			echo "<br/><br/>";
			echo strlen($novo);
		?>
	</div>
</body>
</html>
