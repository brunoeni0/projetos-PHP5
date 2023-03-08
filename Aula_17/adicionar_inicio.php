<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="pt-br">
	<title>adicionar início</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$v = array("A","J","M","X","K");
				array_unshift($v, "P");
				print_r($v);
				array_shift($v);
				print_r($v);
			?>
		</pre>
	</div>
</body>
</html>
