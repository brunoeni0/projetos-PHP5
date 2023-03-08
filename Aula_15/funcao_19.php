<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>função 19</title>
	<link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
	<div>
		<?php
			$frase = "Estou aprendendo PHP";
			$pos = strpos($frase, "PHP");
			echo "$frase <br/> A string foi encontrada na posição $pos";
			//$pos strpos($frase, "php"); // caso use algo que não exista dentro vai retornar false == vazio
		?>
	</div>
</body>
</html>
