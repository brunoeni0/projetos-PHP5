<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 2</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$v[0] = 3;
			$v[1] = 8;
			$v[2] = 4;
			print_r($v);
			echo "<br/><br/>";
			$v2 = array (3, 7, 6, 2, 1, 9);
			print_r($v2);
			echo "<br/><br/>";
			var_dump($v);
			echo "<br/><br/>";
			var_export($v2);
		?>
	</div>
</body>
</html>
