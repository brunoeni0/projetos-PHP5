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
				// o " == " serve para ver se uma variavel tem o valor igual não importando o tipo dela
				echo "As variáveis A e B são iguais? ", $a == $b? "Sim": "Não"; // são parecidas e tem valores iguais
				// o " === " serve para ver se uma variavel além de ter o valor igual se ela tem o tipo idêntico.
				echo "<br>As variáveis A e B são idênticas? ", $a === $b? "Sim": "Não";// são do mesmo tipo e tem valores iguais
			?>
		</div>
	</body>
</html>