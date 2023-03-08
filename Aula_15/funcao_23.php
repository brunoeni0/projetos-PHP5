<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 23</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nome = "Guanabara";
			$novo = str_pad($nome, 30,  "x", STR_PAD_RIGHT); // precisa declarar valor senao o espaço não funciona.
			print("Meu professor $novo é lindo!<br/><br/>");
			$novo = str_pad($nome, 30, ",", STR_PAD_BOTH); // o CENTER foi trocado pelo BOTH numa atualização do php.
			print("Meu professor $novo é lindo!<br/><br/>");
			$novo = str_pad($nome, 30, " ", STR_PAD_LEFT); # alt + 255 para usar espaço.
			print("Meu professor $novo é lindo!");
		?>
	</div>
</body>
</html>
