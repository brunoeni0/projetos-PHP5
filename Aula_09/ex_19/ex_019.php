<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 19</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$inicio = $_GET["i"];
			$fim = $_GET["f"];
			$pulo = $_GET["p"];
			if ($inicio < $fim) {
				while ($inicio <= $fim) {
					echo "$inicio ";
					$inicio += $pulo;
				}
			} else {
				while ($inicio >= $fim) {
					echo "$inicio ";
					$inicio -= $pulo;
				}
			}
		?>
		<a href="javascript:history.go(-1)">Voltar</a>
	</div>
</body>
</html>
