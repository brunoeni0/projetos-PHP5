<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>adicionar final</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$v = array("A", "J", "M", "X", "K");
				array_push($v, "O");
				print_r($v);
				array_pop($v);
				print_r($v);
			?>
		</pre>
	</div>
</body>
</html>
