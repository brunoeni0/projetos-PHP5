<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 15</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$dia = isset($_GET["d"])? $_GET["d"]: 0;
			switch ($dia) {
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo "Dia de aula, vai estudar!";
					break;
				case 7:
				case 8:
					echo "Partiu! Dormir";
					break;
				default:
					echo "Dia da semana inválido!";
			}
		?>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>
