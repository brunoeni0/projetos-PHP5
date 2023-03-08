<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>cantando itens</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$v = array("A", "J", "M", "X", "K");
			echo "O vetor tem " . count($v) . " elementos.<br/>";
			echo "<pre>";
				print_r($v);
			echo "</pre>";
		?>
	</div>
</body>
</html>
