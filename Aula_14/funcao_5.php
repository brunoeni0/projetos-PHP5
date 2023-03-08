<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 5</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nome = "   josé da silva   ";
			echo strlen($nome);
			echo "<br/><br/>";
			$novo = trim($nome);
			echo "$novo";
			echo "<br/><br/>";
			echo strlen($novo);
		?>
	</div>
</body>
</html>
