<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 21</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$fat = isset($_GET["f"])? $_GET["f"]: 0;
			$tot = 1;
			echo "O fatorial de $fat! é:";
			do {
				if ($fat > 1) {
					echo " $fat x ";
					$tot *= $fat;
				} else {
					echo "$fat = $tot";
				}
				$fat--;
			} while ($fat >= 1);
		?>
		<a href="ex_021.html" class="botao">Voltar</a>
	</div>
</body>
</html>
