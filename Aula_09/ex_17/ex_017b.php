<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 17</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$c = 10;
			while ($c > 0) {
				echo "contando... ", $c-- ,"<br/>"; // --$c ou $c -= 1 or $c = $c -1
			}
		?>
	</div>
</body>
<html>
