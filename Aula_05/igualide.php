<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../_css/estilo.css"/>
		<title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<?php
				$a = "3";
				$b = 3;
				echo "As variáveis A e B são iguais? ", $a == $b? "Sim": "Não";
				echo "<br>As variáveis A e B são idênticas? ", $a === $b? "Sim": "Não";
			?>
		</div>
	</body>
</html>