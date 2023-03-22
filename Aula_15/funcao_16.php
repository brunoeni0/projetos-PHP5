<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 16</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nome = "guStAvO GuaNaBaRa";
			$nome2 = ucfirst($nome);
			echo "Seu nome é $nome2 <br>";
			$nome2 = ucfirst(strtolower($nome));
			echo "Seu nome é $nome2";
		?>
	</div>
</body>
</html>
