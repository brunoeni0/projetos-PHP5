<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 20</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$frase = "Estou aprendendo PHP";
			$pos = stripos($frase, "php"); // ele vai ignorar o fato de está em letras minusculas
			print "A string foi encontrada na posição $pos";
		?>
	</div>
</body>
</html>
