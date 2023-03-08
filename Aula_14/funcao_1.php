<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 1</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$prod = "leite";
			$preco = 4.5;
			// echo "O $prod custa ". number_format($preco, 2);
			printf("O %s está custando R$ %.2f", $prod, $preco);
		?>
	</div>
</body>
</html>
