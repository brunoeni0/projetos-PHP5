<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="pt-br"/>
	<title>função 6</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nome = "   José da Silva   ";
			echo strlen($nome);
			echo "<br/><br/>";
			$novo = ltrim($nome);
			echo $nome;
			echo "<br/><br/>";
			echo strlen($novo);
		?>
	</div>
</body>
</html>
