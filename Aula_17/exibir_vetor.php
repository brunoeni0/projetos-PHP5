<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>exibir vetor</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$v = array("A", "J", "M", "X", "K");
				print_r($v);
				echo "<br/>";
				var_dump($v);
				echo "<br/>";
				var_export($v);
			?>
		</pre>
	</div>
</body>
</html>
