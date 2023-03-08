<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="pt-br"/>
	<title>ordem invertida</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$v = array("A", "J", "M", "X", "K");
				print_r($v);
				rsort($v);
				print_r($v);
			?>
		</pre>
	</div>
</body>
</html>
